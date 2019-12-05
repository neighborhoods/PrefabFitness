<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\PDO\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\PDO\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52PDOBuilder;

    public function setPDOBuilder(BuilderInterface $pDOBuilder): self
    {
        if ($this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52PDOBuilder = $pDOBuilder;

        return $this;
    }

    protected function getPDOBuilder(): BuilderInterface
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52PDOBuilder;
    }

    protected function hasPDOBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52PDOBuilder);
    }

    protected function unsetPDOBuilder(): self
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52PDOBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52PDOBuilder);

        return $this;
    }
}
