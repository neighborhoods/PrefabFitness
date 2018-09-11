<?php
declare(strict_types=1);

namespace Neighborhoods\ReplaceThisWithTheNameOfYourProduct\PDO;

interface BuilderInterface
{
    public function getPdo(): \PDO;

    public function setDataSourceName(string $dataSourceName): BuilderInterface;

    public function setUserName(string $userName): BuilderInterface;

    public function setPassword(string $password): BuilderInterface;

    public function setOptions(array $options): BuilderInterface;
}