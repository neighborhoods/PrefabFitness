<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Builder;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getMV1AreaAmenityBuilder();
    }
}
