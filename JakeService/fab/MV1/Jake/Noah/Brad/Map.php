<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad;

use Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface;

class Map extends \ArrayIterator implements MapInterface
{

    /**
     * @param RPL_ENTITY_NAMEInterface ...$RPL_ENTITY_ITEMs
     */
    public function __construct(array $RPL_ENTITY_ITEMs = [], int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new \LogicException('Map is not empty.');
        }

        if (!empty($RPL_ENTITY_ITEMs)) {
            $this->assertValidArrayType(...array_values($RPL_ENTITY_ITEMs));
        }

        parent::__construct($RPL_ENTITY_ITEMs, $flags);
    }

    public function offsetGet($index) : \Neighborhoods\Prefab\Map\RPL_ENTITY_NAMEInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /**
     * @param RPL_ENTITY_NAMEInterface $RPL_ENTITY_ITEM
     */
    public function offsetSet($index, $RPL_ENTITY_ITEM)
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($RPL_ENTITY_ITEM));
    }

    /**
     * @param RPL_ENTITY_NAMEInterface $RPL_ENTITY_ITEM
     */
    public function append($RPL_ENTITY_ITEM)
    {
        $this->assertValidArrayItemType($RPL_ENTITY_ITEM);
        parent::append($RPL_ENTITY_ITEM);
    }

    public function current() : \Neighborhoods\Prefab\Map\RPL_ENTITY_NAMEInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(\Neighborhoods\Prefab\Map\RPL_ENTITY_NAMEInterface $RPL_ENTITY_ITEM)
    {
        return $RPL_ENTITY_ITEM;
    }

    protected function assertValidArrayType(\Neighborhoods\Prefab\Map\RPL_ENTITY_NAMEInterface ... $RPL_ENTITY_ITEMs) : \Neighborhoods\Prefab\Map\MapInterface
    {
        return $this;
    }

    public function getArrayCopy() : \Neighborhoods\Prefab\Map\MapInterface
    {
        return new self(parent::getArrayCopy(), (int)$this->getFlags());
    }

    public function toArray() : array
    {
        return (array)$this;
    }

    public function hydrate(array $array) : \Neighborhoods\Prefab\Map\MapInterface
    {
        $this->__construct($array);

        return $this;
    }


}

