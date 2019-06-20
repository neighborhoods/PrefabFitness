<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabQuoteDemo;

ini_set('assert.exception', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Neighborhoods\PrefabQuoteDemo\mv1\QuotationInterface;

$builderFactoryClassName = \Neighborhoods\PrefabQuoteDemo\mv1\Quotation\Builder\FactoryInterface::class;

$containerBuilder = new \Neighborhoods\PrefabQuoteDemo\Prefab5\Protean\Container\Builder();
$containerBuilder->setContainerName('HelloWorldContainer');
$containerBuilder->registerServiceAsPublic($builderFactoryClassName);
$containerBuilder->getFilesystemProperties()->setRootDirectoryPath(dirname(__DIR__ . '/../../'));
$containerBuilder->buildZendExpressive();
$container = $containerBuilder->build();

$quoteRecord = [
    QuotationInterface::PROP_ID => 1234,
    QuotationInterface::PROP_QUOTATION => 'Hello world!',
    QuotationInterface::PROP_AUTHOR_FIRST_NAME => 'Anonymous'
];

$builderFactory = $container->get($builderFactoryClassName);
$builder = $builderFactory->create();
$builder->setRecord($quoteRecord);
$quotationObject = $builder->build();

echo sprintf('"%s" - %s' . PHP_EOL, $quotationObject->getQuotation(), $quotationObject->getAuthorFirstName());
