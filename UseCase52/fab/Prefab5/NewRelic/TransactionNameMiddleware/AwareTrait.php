<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddlewareInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware;

    public function setNewRelicTransactionNameMiddleware(
        TransactionNameMiddlewareInterface $newRelicTransactionNameMiddleware
    ): self {
        if ($this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware = $newRelicTransactionNameMiddleware;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddleware(): TransactionNameMiddlewareInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware;
    }

    protected function hasNewRelicTransactionNameMiddleware(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware);
    }

    protected function unsetNewRelicTransactionNameMiddleware(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddleware);

        return $this;
    }
}
