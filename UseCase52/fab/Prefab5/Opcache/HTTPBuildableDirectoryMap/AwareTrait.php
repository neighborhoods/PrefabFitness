<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\HTTPBuildableDirectoryMap;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\HTTPBuildableDirectoryMapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap;

    public function setPrefab5OpcacheHTTPBuildableDirectoryMap(HTTPBuildableDirectoryMapInterface $prefab5OpcacheHTTPBuildableDirectoryMap) : self
    {
        if ($this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap = $prefab5OpcacheHTTPBuildableDirectoryMap;

        return $this;
    }

    protected function getPrefab5OpcacheHTTPBuildableDirectoryMap() : HTTPBuildableDirectoryMapInterface
    {
        if (!$this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap;
    }

    protected function hasPrefab5OpcacheHTTPBuildableDirectoryMap() : bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap);
    }

    protected function unsetPrefab5OpcacheHTTPBuildableDirectoryMap() : self
    {
        if (!$this->hasPrefab5OpcacheHTTPBuildableDirectoryMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5OpcacheHTTPBuildableDirectoryMap);

        return $this;
    }
}
