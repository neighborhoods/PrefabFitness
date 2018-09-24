<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder;

    public function setMV1AreaAmenityBuilder(BuilderInterface $mV1AreaAmenityBuilder): self
    {
        if ($this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder = $mV1AreaAmenityBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder;
    }

    protected function hasMV1AreaAmenityBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder);
    }

    protected function unsetMV1AreaAmenityBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41MV1AreaAmenityBuilder);

        return $this;
    }
}
