<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\GroupInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): GroupInterface;
}
