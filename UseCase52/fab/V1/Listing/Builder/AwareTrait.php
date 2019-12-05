<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Builder;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\BuilderInterface;

trait AwareTrait
{
    protected $V1ListingBuilder;

    public function setV1ListingBuilder(BuilderInterface $ListingBuilder): self
    {
        if ($this->hasV1ListingBuilder()) {
            throw new \LogicException('V1ListingBuilder is already set.');
        }
        $this->V1ListingBuilder = $ListingBuilder;

        return $this;
    }

    protected function getV1ListingBuilder(): BuilderInterface
    {
        if (!$this->hasV1ListingBuilder()) {
            throw new \LogicException('V1ListingBuilder is not set.');
        }

        return $this->V1ListingBuilder;
    }

    protected function hasV1ListingBuilder(): bool
    {
        return isset($this->V1ListingBuilder);
    }

    protected function unsetV1ListingBuilder(): self
    {
        if (!$this->hasV1ListingBuilder()) {
            throw new \LogicException('V1ListingBuilder is not set.');
        }
        unset($this->V1ListingBuilder);

        return $this;
    }
}
