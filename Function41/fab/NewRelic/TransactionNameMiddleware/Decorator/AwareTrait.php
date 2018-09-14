<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware\Decorator;

use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator;

    public function setNewRelicTransactionNameMiddlewareDecorator(
        DecoratorInterface $newRelicTransactionNameMiddlewareDecorator
    ): self {
        if ($this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator = $newRelicTransactionNameMiddlewareDecorator;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator;
    }

    protected function hasNewRelicTransactionNameMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator);
    }

    protected function unsetNewRelicTransactionNameMiddlewareDecorator(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddlewareDecorator);

        return $this;
    }
}
