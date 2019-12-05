<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52RedisFactory;

    public function setRedisFactory(FactoryInterface $redisFactory): self
    {
        if ($this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52RedisFactory = $redisFactory;

        return $this;
    }

    protected function getRedisFactory(): FactoryInterface
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52RedisFactory;
    }

    protected function hasRedisFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52RedisFactory);
    }

    protected function unsetRedisFactory(): self
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52RedisFactory);

        return $this;
    }
}
