<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory;

    public function setMV1AreaAmenityBuilderFactory(FactoryInterface $mV1AreaAmenityBuilderFactory): self
    {
        if ($this->hasMV1AreaAmenityBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory = $mV1AreaAmenityBuilderFactory;

        return $this;
    }

    protected function getMV1AreaAmenityBuilderFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory;
    }

    protected function hasMV1AreaAmenityBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory);
    }

    protected function unsetMV1AreaAmenityBuilderFactory(): self
    {
        if (!$this->hasMV1AreaAmenityBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilderFactory);

        return $this;
    }
}
