<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\DecoratorInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): DecoratorInterface;
}
