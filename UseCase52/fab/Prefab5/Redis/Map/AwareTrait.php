<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52RedisMap;

    public function setRedisMap(MapInterface $redisMap): self
    {
        if ($this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52RedisMap = $redisMap;

        return $this;
    }

    protected function getRedisMap(): MapInterface
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52RedisMap;
    }

    protected function hasRedisMap(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52RedisMap);
    }

    protected function unsetRedisMap(): self
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52RedisMap);

        return $this;
    }
}
