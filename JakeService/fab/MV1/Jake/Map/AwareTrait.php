<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMap);

        return $this;
    }


}

