<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapFactory);

        return $this;
    }


}

