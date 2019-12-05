<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\FilterInterface;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrderInterface;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\VisitorInterface;

interface SearchCriteriaInterface extends \JsonSerializable
{
    public function addFilter(FilterInterface $filter): SearchCriteriaInterface;

    public function getFilters(): Filter\MapInterface;

    public function hasFilters() : bool;

    public function getSortOrders(): SortOrder\MapInterface;

    public function addSortOrder(SortOrderInterface $sortOrder): SearchCriteriaInterface;

    public function hasSortOrders() : bool;

    public function getPageSize(): int;

    public function setPageSize(int $pageSize): SearchCriteriaInterface;

    public function hasPageSize() : bool;

    public function getCurrentPage(): int;

    public function setCurrentPage(int $currentPage): SearchCriteriaInterface;

    public function hasCurrentPage() : bool;

    public function addVisitor(VisitorInterface $visitor): SearchCriteriaInterface;

    public function getVisitor(string $identity): VisitorInterface;

    public function toQueryString(): string;
}
