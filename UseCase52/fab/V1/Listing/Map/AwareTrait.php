<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

trait AwareTrait
{
    protected $V1Listings;

    public function setV1ListingMap(MapInterface $Listings): self
    {
        if ($this->hasV1ListingMap()) {
            throw new \LogicException('V1Listings is already set.');
        }
        $this->V1Listings = $Listings;

        return $this;
    }

    protected function getV1ListingMap(): MapInterface
    {
        if (!$this->hasV1ListingMap()) {
            throw new \LogicException('V1Listings is not set.');
        }

        return $this->V1Listings;
    }

    protected function hasV1ListingMap(): bool
    {
        return isset($this->V1Listings);
    }

    protected function unsetV1ListingMap(): self
    {
        if (!$this->hasV1ListingMap()) {
            throw new \LogicException('V1Listings is not set.');
        }
        unset($this->V1Listings);

        return $this;
    }
}
