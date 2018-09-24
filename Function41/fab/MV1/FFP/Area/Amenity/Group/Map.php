<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
class Map extends \ArrayIterator implements MapInterface
{
    /** @param GroupInterface ...$groups */
    public function __construct(array $groups = array(), int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new \LogicException('Map is not empty.');
        }

        if (!empty($groups)) {
            $this->assertValidArrayType(...array_values($groups));
        }

        parent::__construct($groups, $flags);
    }

    public function offsetGet($index): GroupInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param GroupInterface $group */
    public function offsetSet($index, $group)
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($group));
    }

    /** @param GroupInterface $group */
    public function append($group)
    {
        $this->assertValidArrayItemType($group);
        parent::append($group);
    }

    public function current(): GroupInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(GroupInterface $group)
    {
        return $group;
    }

    protected function assertValidArrayType(GroupInterface ...$groups): MapInterface
    {
        return $this;
    }

    public function getArrayCopy(): MapInterface
    {
        return new self(parent::getArrayCopy(), (int)$this->getFlags());
    }

    public function toArray(): array
    {
        return (array)$this;
    }

    public function hydrate(array $array): MapInterface
    {
        $this->__construct($array);

        return $this;
    }
}
