<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap;

    public function setMV1AreaAmenityMap(MapInterface $mV1AreaAmenityMap): self
    {
        if ($this->hasMV1AreaAmenityMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap = $mV1AreaAmenityMap;

        return $this;
    }

    protected function getMV1AreaAmenityMap(): MapInterface
    {
        if (!$this->hasMV1AreaAmenityMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap;
    }

    protected function hasMV1AreaAmenityMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap);
    }

    protected function unsetMV1AreaAmenityMap(): self
    {
        if (!$this->hasMV1AreaAmenityMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMap);

        return $this;
    }
}
