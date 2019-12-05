<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Builder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Builder\FactoryInterface;

trait AwareTrait
{
    protected $V1ListingMapBuilderFactory;

    public function setV1ListingMapBuilderFactory(FactoryInterface $ListingMapBuilderFactory): self
    {
        if ($this->hasV1ListingMapBuilderFactory()) {
            throw new \LogicException('V1ListingMapBuilderFactory is already set.');
        }
        $this->V1ListingMapBuilderFactory = $ListingMapBuilderFactory;

        return $this;
    }

    protected function getV1ListingMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasV1ListingMapBuilderFactory()) {
            throw new \LogicException('V1ListingMapBuilderFactory is not set.');
        }

        return $this->V1ListingMapBuilderFactory;
    }

    protected function hasV1ListingMapBuilderFactory(): bool
    {
        return isset($this->V1ListingMapBuilderFactory);
    }

    protected function unsetV1ListingMapBuilderFactory(): self
    {
        if (!$this->hasV1ListingMapBuilderFactory()) {
            throw new \LogicException('V1ListingMapBuilderFactory is not set.');
        }
        unset($this->V1ListingMapBuilderFactory);

        return $this;
    }
}
