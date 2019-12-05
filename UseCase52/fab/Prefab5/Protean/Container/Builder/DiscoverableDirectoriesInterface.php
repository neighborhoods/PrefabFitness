<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5;

interface DiscoverableDirectoriesInterface
{
    public function addDirectoryPathFilter(string $directoryPathFilter): DiscoverableDirectoriesInterface;

    public function getFullPaths(): array;

    public function getWelcomeBaskets(): Prefab5\WelcomeBasketsInterface;

    public function appendPath(string $path): DiscoverableDirectoriesInterface;
}
