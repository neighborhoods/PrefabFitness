<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\Builder\FilesystemProperties;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\Builder\FilesystemPropertiesInterface;

trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties;

    public function setProteanContainerBuilderFilesystemProperties(FilesystemPropertiesInterface $proteanContainerBuilderFilesystemProperties): self
    {
        if ($this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties = $proteanContainerBuilderFilesystemProperties;

        return $this;
    }

    protected function getProteanContainerBuilderFilesystemProperties(): FilesystemPropertiesInterface
    {
        if (!$this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties;
    }

    protected function hasProteanContainerBuilderFilesystemProperties(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties);
    }

    protected function unsetProteanContainerBuilderFilesystemProperties(): self
    {
        if (!$this->hasProteanContainerBuilderFilesystemProperties()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilderFilesystemProperties);

        return $this;
    }
}
