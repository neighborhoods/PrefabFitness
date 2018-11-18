<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder;

    public function setMV1AreaAmenityMapBuilder(BuilderInterface $mV1AreaAmenityMapBuilder): self
    {
        if ($this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder = $mV1AreaAmenityMapBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityMapBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder;
    }

    protected function hasMV1AreaAmenityMapBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder);
    }

    protected function unsetMV1AreaAmenityMapBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityMapBuilder);

        return $this;
    }
}
