<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Map;

use Neighborhoods\PrefabExamplesUseCase41\Redis\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41RedisMap;

    public function setRedisMap(MapInterface $redisMap): self
    {
        if ($this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41RedisMap = $redisMap;

        return $this;
    }

    protected function getRedisMap(): MapInterface
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41RedisMap;
    }

    protected function hasRedisMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41RedisMap);
    }

    protected function unsetRedisMap(): self
    {
        if (!$this->hasRedisMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41RedisMap);

        return $this;
    }
}
