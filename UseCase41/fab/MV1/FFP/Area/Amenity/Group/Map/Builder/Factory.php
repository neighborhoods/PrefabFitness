<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getMV1AreaAmenityGroupMapBuilder();
    }
}
