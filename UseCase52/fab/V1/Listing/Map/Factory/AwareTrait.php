<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Factory;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\FactoryInterface;

trait AwareTrait
{
    protected $V1ListingMapFactory;

    public function setV1ListingMapFactory(FactoryInterface $ListingMapFactory): self
    {
        if ($this->hasV1ListingMapFactory()) {
            throw new \LogicException('V1ListingMapFactory is already set.');
        }
        $this->V1ListingMapFactory = $ListingMapFactory;

        return $this;
    }

    protected function getV1ListingMapFactory(): FactoryInterface
    {
        if (!$this->hasV1ListingMapFactory()) {
            throw new \LogicException('V1ListingMapFactory is not set.');
        }

        return $this->V1ListingMapFactory;
    }

    protected function hasV1ListingMapFactory(): bool
    {
        return isset($this->V1ListingMapFactory);
    }

    protected function unsetV1ListingMapFactory(): self
    {
        if (!$this->hasV1ListingMapFactory()) {
            throw new \LogicException('V1ListingMapFactory is not set.');
        }
        unset($this->V1ListingMapFactory);

        return $this;
    }
}
