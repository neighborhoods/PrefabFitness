<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\BuilderInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\BuilderInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilder);

        return $this;
    }


}

