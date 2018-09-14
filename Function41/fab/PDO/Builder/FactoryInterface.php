<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\PDO\Builder;

use Neighborhoods\PrefabExamplesFunction41\PDO\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}
