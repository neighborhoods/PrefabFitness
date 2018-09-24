<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\BuilderInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\BuilderInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilder);

        return $this;
    }


}

