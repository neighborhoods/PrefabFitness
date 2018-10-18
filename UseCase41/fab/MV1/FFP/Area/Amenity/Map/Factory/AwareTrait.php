<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory;

    public function setMV1AreaAmenityMapFactory(FactoryInterface $mV1AreaAmenityMapFactory): self
    {
        if ($this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory = $mV1AreaAmenityMapFactory;

        return $this;
    }

    protected function getMV1AreaAmenityMapFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory;
    }

    protected function hasMV1AreaAmenityMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory);
    }

    protected function unsetMV1AreaAmenityMapFactory(): self
    {
        if (!$this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapFactory);

        return $this;
    }
}
