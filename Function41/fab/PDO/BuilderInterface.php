<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\PDO;

interface BuilderInterface
{
    public function getPdo(): \PDO;

    public function setUserName(string $userName): BuilderInterface;

    public function setPassword(string $password): BuilderInterface;

    public function setOptions(array $options): BuilderInterface;
}
