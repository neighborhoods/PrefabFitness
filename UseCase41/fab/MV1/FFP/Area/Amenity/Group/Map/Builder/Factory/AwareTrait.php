<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory;

    public function setMV1AreaAmenityGroupMapBuilderFactory(FactoryInterface $mV1AreaAmenityGroupMapBuilderFactory
    ): self {
        if ($this->hasMV1AreaAmenityGroupMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory = $mV1AreaAmenityGroupMapBuilderFactory;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory;
    }

    protected function hasMV1AreaAmenityGroupMapBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory);
    }

    protected function unsetMV1AreaAmenityGroupMapBuilderFactory(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapBuilderFactory);

        return $this;
    }
}
