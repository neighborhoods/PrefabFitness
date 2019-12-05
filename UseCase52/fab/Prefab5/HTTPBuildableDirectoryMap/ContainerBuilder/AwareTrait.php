<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder;

    public function setPrefab5HTTPBuildableDirectoryMapContainerBuilder(ContainerBuilderInterface $prefab5HTTPBuildableDirectoryMapContainerBuilder) : self
    {
        if ($this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder = $prefab5HTTPBuildableDirectoryMapContainerBuilder;

        return $this;
    }

    protected function getPrefab5HTTPBuildableDirectoryMapContainerBuilder() : ContainerBuilderInterface
    {
        if (!$this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder;
    }

    protected function hasPrefab5HTTPBuildableDirectoryMapContainerBuilder() : bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder);
    }

    protected function unsetPrefab5HTTPBuildableDirectoryMapContainerBuilder() : self
    {
        if (!$this->hasPrefab5HTTPBuildableDirectoryMapContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5HTTPBuildableDirectoryMapContainerBuilder);

        return $this;
    }
}
