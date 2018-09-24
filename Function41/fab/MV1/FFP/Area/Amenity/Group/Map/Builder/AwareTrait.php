<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder;

    public function setMV1AreaAmenityGroupMapBuilder(BuilderInterface $mV1AreaAmenityGroupMapBuilder): self
    {
        if ($this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder = $mV1AreaAmenityGroupMapBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder;
    }

    protected function hasMV1AreaAmenityGroupMapBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder);
    }

    protected function unsetMV1AreaAmenityGroupMapBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapBuilder);

        return $this;
    }
}
