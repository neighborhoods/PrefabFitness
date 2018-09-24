<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getMV1AreaAmenityGroupBuilder();
    }
}
