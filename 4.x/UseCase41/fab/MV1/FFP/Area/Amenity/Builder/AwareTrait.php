<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder;

    public function setMV1AreaAmenityBuilder(BuilderInterface $mV1AreaAmenityBuilder): self
    {
        if ($this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder = $mV1AreaAmenityBuilder;

        return $this;
    }

    protected function getMV1AreaAmenityBuilder(): BuilderInterface
    {
        if (!$this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder;
    }

    protected function hasMV1AreaAmenityBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder);
    }

    protected function unsetMV1AreaAmenityBuilder(): self
    {
        if (!$this->hasMV1AreaAmenityBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41MV1AreaAmenityBuilder);

        return $this;
    }
}
