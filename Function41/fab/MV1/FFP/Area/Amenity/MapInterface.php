<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
interface MapInterface extends \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    /** @param AmenityInterface ...$amenitys */
    public function __construct(array $amenitys = array(), int $flags = 0);

    public function offsetGet($index): AmenityInterface;

    /** @param AmenityInterface $amenity */
    public function offsetSet($index, $amenity);

    /** @param AmenityInterface $amenity */
    public function append($amenity);

    public function current(): AmenityInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    public function hydrate(array $array): MapInterface;
}
