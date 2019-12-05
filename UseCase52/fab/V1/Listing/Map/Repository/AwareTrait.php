<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Repository;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\RepositoryInterface;

trait AwareTrait
{
    protected $V1ListingMapRepository;

    public function setV1ListingMapRepository(RepositoryInterface $ListingMapRepository): self
    {
        if ($this->hasV1ListingMapRepository()) {
            throw new \LogicException('V1ListingMapRepository is already set.');
        }
        $this->V1ListingMapRepository = $ListingMapRepository;

        return $this;
    }

    protected function getV1ListingMapRepository(): RepositoryInterface
    {
        if (!$this->hasV1ListingMapRepository()) {
            throw new \LogicException('V1ListingMapRepository is not set.');
        }

        return $this->V1ListingMapRepository;
    }

    protected function hasV1ListingMapRepository(): bool
    {
        return isset($this->V1ListingMapRepository);
    }

    protected function unsetV1ListingMapRepository(): self
    {
        if (!$this->hasV1ListingMapRepository()) {
            throw new \LogicException('V1ListingMapRepository is not set.');
        }
        unset($this->V1ListingMapRepository);

        return $this;
    }
}
