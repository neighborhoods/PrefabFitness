<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahFactory);

        return $this;
    }


}

