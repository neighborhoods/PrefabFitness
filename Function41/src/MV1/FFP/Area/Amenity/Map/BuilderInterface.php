<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function setRecords(array $records): BuilderInterface;
}
