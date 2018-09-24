<?php

declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Doctrine\DBAL\Connection;

use Doctrine\DBAL\Connection;
use Neighborhoods\PrefabExamplesFunction41\PDO\Builder\FactoryInterface;

interface DecoratorInterface
{
    public const ID_CORE = 'core';
    public const ID_SCHEMA = 'schema';

    public function getDoctrineConnection(): Connection;

    public function setPDOBuilderFactory(FactoryInterface $dbPDOBuilderFactory);

    public function setId(string $id): Decorator;

    public function getId(): string;

    public function setPDO(\PDO $pdo): DecoratorInterface;
}
