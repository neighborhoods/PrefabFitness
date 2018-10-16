<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): SearchCriteriaInterface;
}
