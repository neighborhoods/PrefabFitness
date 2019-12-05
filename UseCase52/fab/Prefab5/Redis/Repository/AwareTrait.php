<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\Repository;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52RedisRepository;

    public function setRedisRepository(RepositoryInterface $redisRepository): self
    {
        if ($this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisRepository is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52RedisRepository = $redisRepository;

        return $this;
    }

    protected function getRedisRepository(): RepositoryInterface
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisRepository is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52RedisRepository;
    }

    protected function hasRedisRepository(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52RedisRepository);
    }

    protected function unsetRedisRepository(): self
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52RedisRepository);

        return $this;
    }
}
