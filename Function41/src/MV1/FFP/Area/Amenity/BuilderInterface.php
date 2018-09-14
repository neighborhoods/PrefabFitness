<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\AmenityInterface;

interface BuilderInterface
{
    public function build(): AmenityInterface;

    public function setRecord(array $record): BuilderInterface;
}
