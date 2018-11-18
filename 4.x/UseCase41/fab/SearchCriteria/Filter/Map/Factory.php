<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaFilterMap()->getArrayCopy();
    }
}
