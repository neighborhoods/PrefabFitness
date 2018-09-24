<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap();
    }


}

