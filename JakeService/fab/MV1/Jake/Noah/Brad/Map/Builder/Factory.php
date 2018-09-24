<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder;

/**
 * @codeCoverageIgnore
 */
class Factory implements FactoryInterface
{

    use AwareTrait;

    public function create() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\BuilderInterface
    {
        return clone $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder();
    }


}

