<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function setRecords(array $records): BuilderInterface;

    public function setMV1AreaAmenityGroupMapFactory(FactoryInterface $mV1AreaAmenityGroupMapFactory): BuilderInterface;
}
