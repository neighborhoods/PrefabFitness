<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

interface BuilderInterface
{
    public function build(): ListingInterface;

    public function buildForInsert(): ListingInterface;

    public function setRecord(array $record): BuilderInterface;
}
