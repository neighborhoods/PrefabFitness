<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): GroupInterface
    {
        return clone $this->getMV1AreaAmenityGroup();
    }
}
