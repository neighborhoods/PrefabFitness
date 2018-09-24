<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\Repository;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository;

    public function setMV1AreaAmenityGroupMapRepository(RepositoryInterface $mV1AreaAmenityGroupMapRepository): self
    {
        if ($this->hasMV1AreaAmenityGroupMapRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository = $mV1AreaAmenityGroupMapRepository;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapRepository(): RepositoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository;
    }

    protected function hasMV1AreaAmenityGroupMapRepository(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository);
    }

    protected function unsetMV1AreaAmenityGroupMapRepository(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapRepository);

        return $this;
    }
}
