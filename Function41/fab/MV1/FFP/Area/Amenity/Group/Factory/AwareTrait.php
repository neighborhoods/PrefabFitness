<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Factory;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory;

    public function setMV1AreaAmenityGroupFactory(FactoryInterface $mV1AreaAmenityGroupFactory): self
    {
        if ($this->hasMV1AreaAmenityGroupFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory = $mV1AreaAmenityGroupFactory;

        return $this;
    }

    protected function getMV1AreaAmenityGroupFactory(): FactoryInterface
    {
        if (!$this->hasMV1AreaAmenityGroupFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory;
    }

    protected function hasMV1AreaAmenityGroupFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory);
    }

    protected function unsetMV1AreaAmenityGroupFactory(): self
    {
        if (!$this->hasMV1AreaAmenityGroupFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityGroupFactory);

        return $this;
    }
}
