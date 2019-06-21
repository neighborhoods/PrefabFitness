<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabQuoteDemo;

ini_set('assert.exception', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorldContainer;
use Neighborhoods\PrefabQuoteDemo\mv1\Quotation;
use Neighborhoods\PrefabQuoteDemo\mv1\QuotationInterface;
use Neighborhoods\PrefabQuoteDemo\Prefab5\Protean\Container\Builder;

function getContainer() : HelloWorldContainer
{
    $containerBuilder = new Builder();
    $containerBuilder->setContainerName('HelloWorldContainer');
    $containerBuilder->registerServiceAsPublic(Quotation\Builder\FactoryInterface::class);
    $containerBuilder->getFilesystemProperties()->setRootDirectoryPath(dirname(__DIR__ . '/../../'));
    $containerBuilder->buildZendExpressive();
    return $containerBuilder->build();
}

function sayHelloToTheWorld(HelloWorldContainer $container) : void
{
    $quoteRecord = [
        QuotationInterface::PROP_ID => 1234,
        QuotationInterface::PROP_QUOTATION => 'Hello world!',
        QuotationInterface::PROP_AUTHOR_FIRST_NAME => 'Anonymous'
    ];

    $builderFactory = $container->get(Quotation\Builder\FactoryInterface::class);
    $builder = $builderFactory->create();
    $builder->setRecord($quoteRecord);
    $quotationObject = $builder->build();

    echo sprintf('"%s" - %s' . PHP_EOL, $quotationObject->getQuotation(), $quotationObject->getAuthorFirstName());
}

$container = getContainer();
sayHelloToTheWorld($container);
