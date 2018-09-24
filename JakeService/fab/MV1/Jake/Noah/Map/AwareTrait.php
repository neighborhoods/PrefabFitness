<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMap);

        return $this;
    }


}

