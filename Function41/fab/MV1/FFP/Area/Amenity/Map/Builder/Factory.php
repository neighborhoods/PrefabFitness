<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getMV1AreaAmenityMapBuilder();
    }
}
