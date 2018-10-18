<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory;

    public function setMV1AreaAmenityGroupBuilderFactory(FactoryInterface $mV1AreaAmenityGroupBuilderFactory): self
    {
        if ($this->hasMV1AreaAmenityGroupBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory = $mV1AreaAmenityGroupBuilderFactory;

        return $this;
    }

    protected function getMV1AreaAmenityGroupBuilderFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory;
    }

    protected function hasMV1AreaAmenityGroupBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory);
    }

    protected function unsetMV1AreaAmenityGroupBuilderFactory(): self
    {
        if (!$this->hasMV1AreaAmenityGroupBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupBuilderFactory);

        return $this;
    }
}
