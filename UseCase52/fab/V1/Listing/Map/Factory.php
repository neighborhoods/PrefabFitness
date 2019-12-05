<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getV1ListingMap()->getArrayCopy();
    }
}
