<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Factory;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory;

    public function setMV1AreaAmenityFactory(FactoryInterface $mV1AreaAmenityFactory): self
    {
        if ($this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory = $mV1AreaAmenityFactory;

        return $this;
    }

    protected function getMV1AreaAmenityFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory;
    }

    protected function hasMV1AreaAmenityFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory);
    }

    protected function unsetMV1AreaAmenityFactory(): self
    {
        if (!$this->hasMV1AreaAmenityFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityFactory);

        return $this;
    }
}
