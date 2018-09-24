<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\Factory;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory;

    public function setMV1AreaAmenityGroupMapFactory(FactoryInterface $mV1AreaAmenityGroupMapFactory): Object
    {
        if ($this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory = $mV1AreaAmenityGroupMapFactory;

        return $this;
    }

    protected function getMV1AreaAmenityGroupMapFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory;
    }

    protected function hasMV1AreaAmenityGroupMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory);
    }

    protected function unsetMV1AreaAmenityGroupMapFactory(): self
    {
        if (!$this->hasMV1AreaAmenityGroupMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupMapFactory);

        return $this;
    }
}
