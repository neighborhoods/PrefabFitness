<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): AmenityInterface
    {
        return clone $this->getMV1AreaAmenity();
    }
}
