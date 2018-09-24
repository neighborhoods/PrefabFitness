<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahMapFactory);

        return $this;
    }


}

