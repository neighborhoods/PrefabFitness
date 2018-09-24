<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\BradInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad();
    }


}

