<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\Factory;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory;

    public function setMV1AreaAmenityMapFactory(FactoryInterface $mV1AreaAmenityMapFactory): self
    {
        if ($this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory = $mV1AreaAmenityMapFactory;

        return $this;
    }

    protected function getMV1AreaAmenityMapFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory;
    }

    protected function hasMV1AreaAmenityMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory);
    }

    protected function unsetMV1AreaAmenityMapFactory(): self
    {
        if (!$this->hasMV1AreaAmenityMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapFactory);

        return $this;
    }
}
