<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Map;

use Neighborhoods\PrefabExamplesUseCase41\Redis\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getRedisMap()->getArrayCopy();
    }
}
