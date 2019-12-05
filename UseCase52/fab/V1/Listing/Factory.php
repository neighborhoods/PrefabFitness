<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;
    public function create(): ListingInterface
    {
        return clone $this->getV1Listing();
    }
}
