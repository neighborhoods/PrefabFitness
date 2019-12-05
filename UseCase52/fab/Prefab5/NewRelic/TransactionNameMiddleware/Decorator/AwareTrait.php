<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddleware\Decorator;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator;

    public function setNewRelicTransactionNameMiddlewareDecorator(
        DecoratorInterface $newRelicTransactionNameMiddlewareDecorator
    ): self {
        if ($this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator = $newRelicTransactionNameMiddlewareDecorator;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator;
    }

    protected function hasNewRelicTransactionNameMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator);
    }

    protected function unsetNewRelicTransactionNameMiddlewareDecorator(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52NewRelicTransactionNameMiddlewareDecorator);

        return $this;
    }
}
