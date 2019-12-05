<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Logger\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Logger\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory;

    public function setPrefab5LoggerFactory(FactoryInterface $prefab5LoggerFactory) : self
    {
        if ($this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory = $prefab5LoggerFactory;

        return $this;
    }

    protected function getPrefab5LoggerFactory() : FactoryInterface
    {
        if (!$this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory;
    }

    protected function hasPrefab5LoggerFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory);
    }

    protected function unsetPrefab5LoggerFactory() : self
    {
        if (!$this->hasPrefab5LoggerFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5LoggerFactory);

        return $this;
    }
}
