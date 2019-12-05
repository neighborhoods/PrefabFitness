<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\PDO\Builder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\PDO\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory;

    public function setPDOBuilderFactory(FactoryInterface $pDOBuilderFactory): self
    {
        if ($this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory = $pDOBuilderFactory;

        return $this;
    }

    protected function getPDOBuilderFactory(): FactoryInterface
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory;
    }

    protected function hasPDOBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory);
    }

    protected function unsetPDOBuilderFactory(): self
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52PDOBuilderFactory);

        return $this;
    }
}
