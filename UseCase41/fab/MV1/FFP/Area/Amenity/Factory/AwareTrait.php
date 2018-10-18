<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory;

    public function setMV1AreaAmenityFactory(FactoryInterface $mV1AreaAmenityFactory): self
    {
        if ($this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory = $mV1AreaAmenityFactory;

        return $this;
    }

    protected function getMV1AreaAmenityFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory;
    }

    protected function hasMV1AreaAmenityFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory);
    }

    protected function unsetMV1AreaAmenityFactory(): self
    {
        if (!$this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityFactory);

        return $this;
    }
}
