<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder();
    }


}

