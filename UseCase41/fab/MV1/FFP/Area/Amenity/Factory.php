<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): AmenityInterface
    {
        return clone $this->getMV1AreaAmenity();
    }
}
