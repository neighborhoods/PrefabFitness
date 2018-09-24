<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\BradInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\BradInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\BradInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\BradInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBrad);

        return $this;
    }


}

