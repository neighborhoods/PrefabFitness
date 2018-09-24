<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap();
    }


}

