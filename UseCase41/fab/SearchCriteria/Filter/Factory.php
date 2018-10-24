<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): FilterInterface
    {
        return clone $this->getSearchCriteriaFilter();
    }
}
