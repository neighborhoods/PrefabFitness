<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\GroupInterface;

interface BuilderInterface
{
    public function build(): GroupInterface;

    public function setRecord(array $record): BuilderInterface;
}
