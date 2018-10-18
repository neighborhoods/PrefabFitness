<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\Builder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}
