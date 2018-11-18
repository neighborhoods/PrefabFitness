<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap;

    public function setMV1AreaAmenityGroupMap(MapInterface $mV1AreaAmenityGroupMap): self
    {
        if ($this->hasMV1AreaAmenityGroupMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap = $mV1AreaAmenityGroupMap;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMap(): MapInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap;
    }

    protected function hasMV1AreaAmenityGroupMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap);
    }

    protected function unsetMV1AreaAmenityGroupMap(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMap);

        return $this;
    }
}
