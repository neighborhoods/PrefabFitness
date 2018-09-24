<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Repository;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\RepositoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\RepositoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahRepository);

        return $this;
    }


}

