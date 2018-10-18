<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup;

    public function setMV1AreaAmenityGroup(GroupInterface $mV1AreaAmenityGroup): self
    {
        if ($this->hasMV1AreaAmenityGroup()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup = $mV1AreaAmenityGroup;

        return $this;
    }

    protected function getMV1AreaAmenityGroup(): GroupInterface
    {
        if (!$this->hasMV1AreaAmenityGroup()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup;
    }

    protected function hasMV1AreaAmenityGroup(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup);
    }

    protected function unsetMV1AreaAmenityGroup(): self
    {
        if (!$this->hasMV1AreaAmenityGroup()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroup);

        return $this;
    }
}
