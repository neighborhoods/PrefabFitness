<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\PDO\Builder;

use Neighborhoods\PrefabExamplesUseCase41\PDO\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}
