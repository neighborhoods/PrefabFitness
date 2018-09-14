<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity;

    public function setMV1AreaAmenity(AmenityInterface $mV1AreaAmenity): self
    {
        if ($this->hasMV1AreaAmenity()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity = $mV1AreaAmenity;

        return $this;
    }

    protected function getMV1AreaAmenity(): AmenityInterface
    {
        if (!$this->hasMV1AreaAmenity()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity;
    }

    protected function hasMV1AreaAmenity(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity);
    }

    protected function unsetMV1AreaAmenity(): self
    {
        if (!$this->hasMV1AreaAmenity()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenity);

        return $this;
    }
}
