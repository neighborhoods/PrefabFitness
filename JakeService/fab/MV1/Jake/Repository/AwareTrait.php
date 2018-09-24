<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Repository;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\RepositoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\RepositoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeRepository);

        return $this;
    }


}

