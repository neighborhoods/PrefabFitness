<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap();
    }


}

