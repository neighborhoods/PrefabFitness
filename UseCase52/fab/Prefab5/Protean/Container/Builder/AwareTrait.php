<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\BuilderInterface;

trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder;

    public function setProteanContainerBuilder(BuilderInterface $proteanContainerBuilder): self
    {
        if ($this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder = $proteanContainerBuilder;

        return $this;
    }

    protected function getProteanContainerBuilder(): BuilderInterface
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder;
    }

    protected function hasProteanContainerBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder);
    }

    protected function unsetProteanContainerBuilder(): self
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52ProteanContainerBuilder);

        return $this;
    }
}
