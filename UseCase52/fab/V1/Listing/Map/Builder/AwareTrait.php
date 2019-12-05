<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Builder;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\BuilderInterface;

trait AwareTrait
{
    protected $V1ListingMapBuilder;

    public function setV1ListingMapBuilder(BuilderInterface $ListingMapBuilder): self
    {
        if ($this->hasV1ListingMapBuilder()) {
            throw new \LogicException('V1ListingMapBuilder is already set.');
        }
        $this->V1ListingMapBuilder = $ListingMapBuilder;

        return $this;
    }

    protected function getV1ListingMapBuilder(): BuilderInterface
    {
        if (!$this->hasV1ListingMapBuilder()) {
            throw new \LogicException('V1ListingMapBuilder is not set.');
        }

        return $this->V1ListingMapBuilder;
    }

    protected function hasV1ListingMapBuilder(): bool
    {
        return isset($this->V1ListingMapBuilder);
    }

    protected function unsetV1ListingMapBuilder(): self
    {
        if (!$this->hasV1ListingMapBuilder()) {
            throw new \LogicException('V1ListingMapBuilder is not set.');
        }
        unset($this->V1ListingMapBuilder);

        return $this;
    }
}
