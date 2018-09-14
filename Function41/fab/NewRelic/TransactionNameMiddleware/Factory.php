<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware;
use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddlewareInterface;
use Symfony\Component\DependencyInjection\Container;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function __invoke(Container $container, string $requestedName): TransactionNameMiddlewareInterface
    {
        return new TransactionNameMiddleware();
    }

    public function create(): TransactionNameMiddlewareInterface
    {
        return clone $this->getNewRelicTransactionNameMiddleware();
    }
}
