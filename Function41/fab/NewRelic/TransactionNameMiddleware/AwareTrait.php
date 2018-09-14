<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddlewareInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware;

    public function setNewRelicTransactionNameMiddleware(
        TransactionNameMiddlewareInterface $newRelicTransactionNameMiddleware
    ): self {
        if ($this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware = $newRelicTransactionNameMiddleware;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddleware(): TransactionNameMiddlewareInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware;
    }

    protected function hasNewRelicTransactionNameMiddleware(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware);
    }

    protected function unsetNewRelicTransactionNameMiddleware(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41NewRelicTransactionNameMiddleware);

        return $this;
    }
}
