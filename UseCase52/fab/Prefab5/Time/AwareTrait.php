<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Time;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\TimeInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52Time;

    public function setTime(TimeInterface $time): self
    {
        if ($this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Time is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52Time = $time;

        return $this;
    }

    protected function getTime(): TimeInterface
    {
        if (!$this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Time is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52Time;
    }

    protected function hasTime(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52Time);
    }

    protected function unsetTime(): self
    {
        if (!$this->hasTime()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52Time is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52Time);

        return $this;
    }
}
