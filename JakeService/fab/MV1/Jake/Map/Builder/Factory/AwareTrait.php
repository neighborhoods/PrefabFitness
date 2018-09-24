<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeMapBuilderFactory);

        return $this;
    }


}

