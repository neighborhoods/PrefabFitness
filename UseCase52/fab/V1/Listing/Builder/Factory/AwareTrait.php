<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Builder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Builder\FactoryInterface;

trait AwareTrait
{
    protected $V1ListingBuilderFactory;

    public function setV1ListingBuilderFactory(FactoryInterface $ListingBuilderFactory): self
    {
        if ($this->hasV1ListingBuilderFactory()) {
            throw new \LogicException('V1ListingBuilderFactory is already set.');
        }
        $this->V1ListingBuilderFactory = $ListingBuilderFactory;

        return $this;
    }

    protected function getV1ListingBuilderFactory(): FactoryInterface
    {
        if (!$this->hasV1ListingBuilderFactory()) {
            throw new \LogicException('V1ListingBuilderFactory is not set.');
        }

        return $this->V1ListingBuilderFactory;
    }

    protected function hasV1ListingBuilderFactory(): bool
    {
        return isset($this->V1ListingBuilderFactory);
    }

    protected function unsetV1ListingBuilderFactory(): self
    {
        if (!$this->hasV1ListingBuilderFactory()) {
            throw new \LogicException('V1ListingBuilderFactory is not set.');
        }
        unset($this->V1ListingBuilderFactory);

        return $this;
    }
}
