<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapBuilderFactory);

        return $this;
    }


}

