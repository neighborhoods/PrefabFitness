<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): AmenityInterface;
}
