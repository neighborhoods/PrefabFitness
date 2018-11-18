<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaVisitorMap()->getArrayCopy();
    }
}
