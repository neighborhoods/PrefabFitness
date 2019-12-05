<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Factory;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\FactoryInterface;

trait AwareTrait
{
    protected $V1ListingFactory;

    public function setV1ListingFactory(FactoryInterface $ListingFactory): self
    {
        if ($this->hasV1ListingFactory()) {
            throw new \LogicException('V1ListingFactory is already set.');
        }
        $this->V1ListingFactory = $ListingFactory;

        return $this;
    }

    protected function getV1ListingFactory(): FactoryInterface
    {
        if (!$this->hasV1ListingFactory()) {
            throw new \LogicException('V1ListingFactory is not set.');
        }

        return $this->V1ListingFactory;
    }

    protected function hasV1ListingFactory(): bool
    {
        return isset($this->V1ListingFactory);
    }

    protected function unsetV1ListingFactory(): self
    {
        if (!$this->hasV1ListingFactory()) {
            throw new \LogicException('V1ListingFactory is not set.');
        }
        unset($this->V1ListingFactory);

        return $this;
    }
}
