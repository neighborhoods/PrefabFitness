<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function buildForInsert(): MapInterface;

    public function setRecords(array $records): BuilderInterface;
}

