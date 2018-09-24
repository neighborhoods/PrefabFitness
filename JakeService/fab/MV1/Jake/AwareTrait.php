<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1Jake = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1Jake(\Neighborhoods\PrefabExamplesJakeService\MV1\JakeInterface $NeighborhoodsPrefabExamplesJakeServiceMV1Jake) : \Neighborhoods\PrefabExamplesJakeService\MV1\JakeInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1Jake()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1Jake is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1Jake = $NeighborhoodsPrefabExamplesJakeServiceMV1Jake;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1Jake() : \Neighborhoods\PrefabExamplesJakeService\MV1\JakeInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1Jake()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1Jake is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1Jake;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1Jake() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1Jake);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1Jake() : \Neighborhoods\PrefabExamplesJakeService\MV1\JakeInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1Jake()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1Jake is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1Jake);

        return $this;
    }


}

