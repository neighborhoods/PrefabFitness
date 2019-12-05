<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Builder;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getV1ListingBuilder();
    }
}
