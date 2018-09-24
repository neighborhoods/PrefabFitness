<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getMV1AreaAmenityGroupMap()->getArrayCopy();
    }
}
