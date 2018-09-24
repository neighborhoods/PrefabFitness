<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoah);

        return $this;
    }


}

