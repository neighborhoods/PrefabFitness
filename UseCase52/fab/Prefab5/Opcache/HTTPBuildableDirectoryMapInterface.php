<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache;

interface HTTPBuildableDirectoryMapInterface
{

    public const CACHE_DIRECTORY_PATH = __DIR__ . '/../../../data/cache/Opcache/HTTPBuildableDirectoryMap';


    public function flush() : HTTPBuildableDirectoryMapInterface;

    public function getBuildableDirectoryMap() : ?array;

}
