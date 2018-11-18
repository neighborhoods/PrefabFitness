<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory;

    public function setMV1AreaAmenityGroupMapFactory(FactoryInterface $mV1AreaAmenityGroupMapFactory): Object
    {
        if ($this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory = $mV1AreaAmenityGroupMapFactory;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory;
    }

    protected function hasMV1AreaAmenityGroupMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory);
    }

    protected function unsetMV1AreaAmenityGroupMapFactory(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityGroupMapFactory);

        return $this;
    }
}
