<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\JakeInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1Jake();
    }


}

