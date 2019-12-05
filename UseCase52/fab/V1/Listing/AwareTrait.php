<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

trait AwareTrait
{
    protected $V1Listing;

    public function setV1Listing(ListingInterface $Listing): self
    {
        if ($this->hasV1Listing()) {
            throw new \LogicException('V1Listing is already set.');
        }
        $this->V1Listing = $Listing;

        return $this;
    }

    protected function getV1Listing(): ListingInterface
    {
        if (!$this->hasV1Listing()) {
            throw new \LogicException('V1Listing is not set.');
        }

        return $this->V1Listing;
    }

    protected function hasV1Listing(): bool
    {
        return isset($this->V1Listing);
    }

    protected function unsetV1Listing(): self
    {
        if (!$this->hasV1Listing()) {
            throw new \LogicException('V1Listing is not set.');
        }
        unset($this->V1Listing);

        return $this;
    }
}
