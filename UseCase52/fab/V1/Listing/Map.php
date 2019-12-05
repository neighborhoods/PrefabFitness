<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

class Map extends \ArrayIterator implements MapInterface
{
    /** @param ListingInterface ...$Listings */
    public function __construct(array $Listings = [], int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new \LogicException('Map is not empty.');
        }

        if (!empty($Listings)) {
            $this->assertValidArrayType(...array_values($Listings));
        }

        parent::__construct($Listings, $flags);
    }

    public function offsetGet($index): ListingInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param ListingInterface $Listing */
    public function offsetSet($index, $Listing)
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($Listing));
    }

    /** @param ListingInterface $Listing */
    public function append($Listing)
    {
        $this->assertValidArrayItemType($Listing);
        parent::append($Listing);
    }

    public function current(): ListingInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(ListingInterface $Listing)
    {
        return $Listing;
    }

    protected function assertValidArrayType(ListingInterface ...$Listings): MapInterface
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

    /** @param ListingInterface ...$Listings */
    public function hydrate(array $Listings): MapInterface
    {
        $this->__construct($Listings);

        return $this;
    }
}
