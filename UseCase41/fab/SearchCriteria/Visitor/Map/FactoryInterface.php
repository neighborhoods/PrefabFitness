<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): MapInterface;
}
