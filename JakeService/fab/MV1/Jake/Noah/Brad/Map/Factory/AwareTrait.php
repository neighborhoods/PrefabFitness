<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\Factory;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\FactoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\FactoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Map\FactoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradMapFactory);

        return $this;
    }


}

