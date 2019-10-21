#!/usr/bin/env php
<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$databaseName = getenv('DATABASE_NAME');

$connection = new \Doctrine\DBAL\Connection(
    [
        'name' => $databaseName,
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

$testDbExistsQuery->execute([$databaseName]);
$exists = $testDbExistsQuery->fetch();

if (empty($exists)) {
    print_r('Creating database ' . $databaseName . PHP_EOL);
    $connection->exec(
        "CREATE DATABASE " . $databaseName
    );

    exit(0);
}

exit(1);
