<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddlewareInterface;
use Symfony\Component\DependencyInjection\Container;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function __invoke(Container $container, string $requestedName): TransactionNameMiddlewareInterface;

    public function create(): TransactionNameMiddlewareInterface;
}
