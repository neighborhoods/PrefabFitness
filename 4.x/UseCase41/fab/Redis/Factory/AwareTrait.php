<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Factory;

use Neighborhoods\PrefabExamplesUseCase41\Redis\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41RedisFactory;

    public function setRedisFactory(FactoryInterface $redisFactory): self
    {
        if ($this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41RedisFactory = $redisFactory;

        return $this;
    }

    protected function getRedisFactory(): FactoryInterface
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41RedisFactory;
    }

    protected function hasRedisFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41RedisFactory);
    }

    protected function unsetRedisFactory(): self
    {
        if (!$this->hasRedisFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41RedisFactory);

        return $this;
    }
}
