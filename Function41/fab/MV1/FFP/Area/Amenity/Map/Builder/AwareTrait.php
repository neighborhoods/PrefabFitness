<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder;

    public function setMV1AreaAmenityMapBuilder(BuilderInterface $mV1AreaAmenityMapBuilder): self
    {
        if ($this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder = $mV1AreaAmenityMapBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityMapBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder;
    }

    protected function hasMV1AreaAmenityMapBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder);
    }

    protected function unsetMV1AreaAmenityMapBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityMapBuilder);

        return $this;
    }
}
