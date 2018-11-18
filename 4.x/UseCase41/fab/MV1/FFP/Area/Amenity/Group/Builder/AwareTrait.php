<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder;

    public function setMV1AreaAmenityGroupBuilder(BuilderInterface $mV1AreaAmenityGroupBuilder): self
    {
        if ($this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder = $mV1AreaAmenityGroupBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityGroupBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder;
    }

    protected function hasMV1AreaAmenityGroupBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder);
    }

    protected function unsetMV1AreaAmenityGroupBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityGroupBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilder);

        return $this;
    }
}
