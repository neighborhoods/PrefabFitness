<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\AmenityInterface;

interface BuilderInterface
{
    public function build(): AmenityInterface;

    public function setRecord(array $record): BuilderInterface;
}
