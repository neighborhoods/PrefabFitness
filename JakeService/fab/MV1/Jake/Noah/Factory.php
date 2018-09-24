<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah();
    }


}

