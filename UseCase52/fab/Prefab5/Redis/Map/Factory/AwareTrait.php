<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\Map\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Redis\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52RedisMapFactory;

    public function setRedisMapFactory(FactoryInterface $redisMapFactory): self
    {
        if ($this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52RedisMapFactory = $redisMapFactory;

        return $this;
    }

    protected function getRedisMapFactory(): FactoryInterface
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52RedisMapFactory;
    }

    protected function hasRedisMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52RedisMapFactory);
    }

    protected function unsetRedisMapFactory(): self
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52RedisMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52RedisMapFactory);

        return $this;
    }
}
