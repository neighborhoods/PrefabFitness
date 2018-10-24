<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): SearchCriteriaInterface
    {
        return clone $this->getSearchCriteria();
    }
}
