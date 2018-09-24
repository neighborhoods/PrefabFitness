<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\BuilderInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilder);

        return $this;
    }


}

