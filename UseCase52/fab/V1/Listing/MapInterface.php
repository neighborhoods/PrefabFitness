<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

interface MapInterface extends \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    /** @param ListingInterface ...$Listings */
    public function __construct(array $Listings = [], int $flags = 0);

    public function offsetGet($index): ListingInterface;

    /** @param ListingInterface $Listing */
    public function offsetSet($index, $Listing);

    /** @param ListingInterface $Listing */
    public function append($Listing);

    public function current(): ListingInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    /** @param ListingInterface ...$Listings */
    public function hydrate(array $Listings): MapInterface;
}
