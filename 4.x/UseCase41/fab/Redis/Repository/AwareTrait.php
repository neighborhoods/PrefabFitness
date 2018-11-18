<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Repository;

use Neighborhoods\PrefabExamplesUseCase41\Redis\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41RedisRepository;

    public function setRedisRepository(RepositoryInterface $redisRepository): self
    {
        if ($this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41RedisRepository = $redisRepository;

        return $this;
    }

    protected function getRedisRepository(): RepositoryInterface
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41RedisRepository;
    }

    protected function hasRedisRepository(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41RedisRepository);
    }

    protected function unsetRedisRepository(): self
    {
        if (!$this->hasRedisRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41RedisRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41RedisRepository);

        return $this;
    }
}
