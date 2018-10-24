<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
class Map extends \ArrayIterator implements MapInterface
{
    /** @param AmenityInterface ...$amenitys */
    public function __construct(array $amenitys = array(), int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new \LogicException('Map is not empty.');
        }

        if (!empty($amenitys)) {
            $this->assertValidArrayType(...array_values($amenitys));
        }

        parent::__construct($amenitys, $flags);
    }

    public function offsetGet($index): AmenityInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param AmenityInterface $amenity */
    public function offsetSet($index, $amenity)
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($amenity));
    }

    /** @param AmenityInterface $amenity */
    public function append($amenity)
    {
        $this->assertValidArrayItemType($amenity);
        parent::append($amenity);
    }

    public function current(): AmenityInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(AmenityInterface $amenity)
    {
        return $amenity;
    }

    protected function assertValidArrayType(AmenityInterface ...$amenitys): MapInterface
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
