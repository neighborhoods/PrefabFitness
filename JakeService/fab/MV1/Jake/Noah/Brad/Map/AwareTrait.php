<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\MapInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMap);

        return $this;
    }


}

