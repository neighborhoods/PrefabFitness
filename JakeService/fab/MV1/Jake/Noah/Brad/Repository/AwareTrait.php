<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\Repository;

/**
 * @codeCoverageIgnore
 */
trait AwareTrait
{

    protected $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository = null;

    public function setNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository(\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\RepositoryInterface $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository) : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\RepositoryInterface
    {
        if ($this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository = $NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository;

        return $this;
    }

    protected function getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository;
    }

    protected function hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository() : bool
    {
        return isset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository);
    }

    protected function unsetNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository() : \Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\Brad\RepositoryInterface
    {
        if (!$this->hasNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBradRepository);

        return $this;
    }


}

