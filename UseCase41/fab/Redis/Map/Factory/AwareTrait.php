<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\Redis\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41RedisMapFactory;

    public function setRedisMapFactory(FactoryInterface $redisMapFactory): self
    {
        if ($this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41RedisMapFactory = $redisMapFactory;

        return $this;
    }

    protected function getRedisMapFactory(): FactoryInterface
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41RedisMapFactory;
    }

    protected function hasRedisMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41RedisMapFactory);
    }

    protected function unsetRedisMapFactory(): self
    {
        if (!$this->hasRedisMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41RedisMapFactory);

        return $this;
    }
}
