<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
interface MapInterface extends \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    /** @param GroupInterface ...$groups */
    public function __construct(array $groups = array(), int $flags = 0);

    public function offsetGet($index): GroupInterface;

    /** @param GroupInterface $group */
    public function offsetSet($index, $group);

    /** @param GroupInterface $group */
    public function append($group);

    public function current(): GroupInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    public function hydrate(array $array): MapInterface;
}
