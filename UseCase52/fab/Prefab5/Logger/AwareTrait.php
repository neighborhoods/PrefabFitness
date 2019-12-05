<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Logger;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\LoggerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52Prefab5Logger;

    public function setPrefab5Logger(LoggerInterface $prefab5Logger) : self
    {
        if ($this->hasPrefab5Logger()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5Logger is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52Prefab5Logger = $prefab5Logger;

        return $this;
    }

    protected function getPrefab5Logger() : LoggerInterface
    {
        if (!$this->hasPrefab5Logger()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5Logger is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52Prefab5Logger;
    }

    protected function hasPrefab5Logger() : bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5Logger);
    }

    protected function unsetPrefab5Logger() : self
    {
        if (!$this->hasPrefab5Logger()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Prefab5Logger is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52Prefab5Logger);

        return $this;
    }
}
