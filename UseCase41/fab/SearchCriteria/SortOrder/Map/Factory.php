<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaSortOrderMap()->getArrayCopy();
    }
}
