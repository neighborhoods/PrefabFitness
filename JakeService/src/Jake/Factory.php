<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessJakeService\Jake;

use Neighborhoods\PrefabFitnessJakeService\JakeInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create() : JakeInterface
    {
        return clone $this->getJake();
    }
}
