<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\AmenityInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): AmenityInterface;
}
