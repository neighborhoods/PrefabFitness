<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\GroupInterface;

interface BuilderInterface
{
    public function build(): GroupInterface;

    public function setRecord(array $record): BuilderInterface;
}
