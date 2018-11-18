<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\Builder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder;

    public function setSearchCriteriaServerRequestBuilder(BuilderInterface $searchCriteriaServerRequestBuilder): self
    {
        if ($this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder = $searchCriteriaServerRequestBuilder;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder;
    }

    protected function hasSearchCriteriaServerRequestBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder);
    }

    protected function unsetSearchCriteriaServerRequestBuilder(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilder);

        return $this;
    }
}
