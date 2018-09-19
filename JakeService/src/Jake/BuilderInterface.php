<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessJakeService\Jake;

use Neighborhoods\PrefabFitnessJakeService\JakeInterface;

interface BuilderInterface
{
    public function build() : JakeInterface;

    public function setRecord(array $record) : BuilderInterface;
}
