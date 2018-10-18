<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddlewareInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware;

    public function setNewRelicTransactionNameMiddleware(
        TransactionNameMiddlewareInterface $newRelicTransactionNameMiddleware
    ): self {
        if ($this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware = $newRelicTransactionNameMiddleware;

        return $this;
    }

    protected function getNewRelicTransactionNameMiddleware(): TransactionNameMiddlewareInterface
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware;
    }

    protected function hasNewRelicTransactionNameMiddleware(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware);
    }

    protected function unsetNewRelicTransactionNameMiddleware(): self
    {
        if (!$this->hasNewRelicTransactionNameMiddleware()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41NewRelicTransactionNameMiddleware);

        return $this;
    }
}
