<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\BuilderInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder();
    }


}

