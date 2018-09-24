<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeFactory);

        return $this;
    }


}

