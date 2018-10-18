<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): FilterInterface;
}
