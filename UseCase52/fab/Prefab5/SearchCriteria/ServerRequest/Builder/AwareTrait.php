<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\ServerRequest\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder;

    public function setSearchCriteriaServerRequestBuilder(BuilderInterface $searchCriteriaServerRequestBuilder): self
    {
        if ($this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder = $searchCriteriaServerRequestBuilder;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder;
    }

    protected function hasSearchCriteriaServerRequestBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder);
    }

    protected function unsetSearchCriteriaServerRequestBuilder(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilder);

        return $this;
    }
}
