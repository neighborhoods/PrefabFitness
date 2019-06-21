<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\Builder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getSearchCriteriaServerRequestBuilder();
    }
}