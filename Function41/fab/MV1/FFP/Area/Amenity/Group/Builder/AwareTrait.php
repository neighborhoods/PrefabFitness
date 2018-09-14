<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder;

    public function setMV1AreaAmenityGroupBuilder(BuilderInterface $mV1AreaAmenityGroupBuilder): self
    {
        if ($this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder = $mV1AreaAmenityGroupBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityGroupBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder;
    }

    protected function hasMV1AreaAmenityGroupBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder);
    }

    protected function unsetMV1AreaAmenityGroupBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupBuilder);

        return $this;
    }
}
