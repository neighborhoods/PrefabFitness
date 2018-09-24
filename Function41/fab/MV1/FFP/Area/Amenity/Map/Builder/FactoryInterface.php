<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\Builder;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Map\BuilderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): BuilderInterface;
}
