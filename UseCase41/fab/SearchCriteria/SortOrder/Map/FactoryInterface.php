<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): MapInterface;
}
