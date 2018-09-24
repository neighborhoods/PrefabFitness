<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): GroupInterface;
}
