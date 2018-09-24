<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Builder\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapBuilderFactory);

        return $this;
    }


}

