<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder;

    public function setMV1AreaAmenityGroupMapBuilder(BuilderInterface $mV1AreaAmenityGroupMapBuilder): self
    {
        if ($this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder = $mV1AreaAmenityGroupMapBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder;
    }

    protected function hasMV1AreaAmenityGroupMapBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder);
    }

    protected function unsetMV1AreaAmenityGroupMapBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilder);

        return $this;
    }
}
