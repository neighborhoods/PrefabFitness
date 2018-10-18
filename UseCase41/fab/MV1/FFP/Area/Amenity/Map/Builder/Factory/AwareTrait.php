<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory;

    public function setMV1AreaAmenityMapBuilderFactory(FactoryInterface $mV1AreaAmenityMapBuilderFactory): self
    {
        if ($this->hasMV1AreaAmenityMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory = $mV1AreaAmenityMapBuilderFactory;

        return $this;
    }

    protected function getMV1AreaAmenityMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory;
    }

    protected function hasMV1AreaAmenityMapBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory);
    }

    protected function unsetMV1AreaAmenityMapBuilderFactory(): self
    {
        if (!$this->hasMV1AreaAmenityMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilderFactory);

        return $this;
    }
}
