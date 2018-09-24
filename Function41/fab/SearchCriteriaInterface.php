<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41;

use Neighborhoods\PrefabExamplesFunction41\SearchCriteria\Filter;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria\FilterInterface;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria\SortOrder;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria\SortOrderInterface;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria\VisitorInterface;

interface SearchCriteriaInterface extends \JsonSerializable
{
    public function addFilter(FilterInterface $filter): SearchCriteriaInterface;

    public function getFilters(): Filter\MapInterface;

    public function getSortOrders(): SortOrder\MapInterface;

    public function addSortOrder(SortOrderInterface $sortOrder): SearchCriteriaInterface;

    public function getPageSize(): int;

    public function setPageSize(int $pageSize): SearchCriteriaInterface;

    public function getCurrentPage(): int;

    public function setCurrentPage(int $currentPage): SearchCriteriaInterface;

    public function addVisitor(VisitorInterface $visitor): SearchCriteriaInterface;

    public function getVisitor(string $identity): VisitorInterface;
}
