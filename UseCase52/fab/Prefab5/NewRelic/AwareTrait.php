<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelicInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52NewRelic;

    public function setNewRelic(NewRelicInterface $newRelic): self
    {
        if ($this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelic is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52NewRelic = $newRelic;

        return $this;
    }

    protected function getNewRelic(): NewRelicInterface
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelic is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52NewRelic;
    }

    protected function hasNewRelic(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52NewRelic);
    }

    protected function unsetNewRelic(): self
    {
        if (!$this->hasNewRelic()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelic is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52NewRelic);

        return $this;
    }
}
