#!/usr/bin/env php
<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

const DATABASE_NAME = 'prefab_fitness';

$connection = new \Doctrine\DBAL\Connection(
    [
        'name' => DATABASE_NAME,
        'adapter' => getenv('DATABASE_ADAPTER'),
        'host' => getenv('DATABASE_HOST'),
        'user' => getenv('DATABASE_USERNAME'),
        'password' => getenv('DATABASE_PASSWORD'),
        'port' => getenv('DATABASE_PORT'),
        'charset' => 'utf8',
    ],
    new \Doctrine\DBAL\Driver\PDOPgSql\Driver()
);

$testDbExistsQuery = $connection->prepare(
    'SELECT datname FROM pg_database WHERE datname = :datname'
);

$testDbExistsQuery->execute([DATABASE_NAME]);
$exists = $testDbExistsQuery->fetch();

if (empty($exists)) {
    print_r('Creating database ' . DATABASE_NAME . PHP_EOL);
    $connection->exec(
        "CREATE DATABASE " . DATABASE_NAME
    );

    exit(0);
}

exit(1);
