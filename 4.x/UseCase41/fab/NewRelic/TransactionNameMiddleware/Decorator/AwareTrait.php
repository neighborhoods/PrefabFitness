<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddleware\Decorator;

use Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator;

    public function setNewRelicTransactionNameMiddlewareDecorator(
        DecoratorInterface $newRelicTransactionNameMiddlewareDecorator
    ): self {
        if ($this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator = $newRelicTransactionNameMiddlewareDecorator;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator;
    }

    protected function hasNewRelicTransactionNameMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator);
    }

    protected function unsetNewRelicTransactionNameMiddlewareDecorator(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddlewareDecorator);

        return $this;
    }
}
