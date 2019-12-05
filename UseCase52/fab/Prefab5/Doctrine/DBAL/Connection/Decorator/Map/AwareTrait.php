<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap;

    public function setDoctrineDBALConnectionDecoratorMap(MapInterface $doctrineDBALConnectionDecoratorMap): self
    {
        if ($this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap = $doctrineDBALConnectionDecoratorMap;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMap(): MapInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap;
    }

    protected function hasDoctrineDBALConnectionDecoratorMap(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMap(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMap);

        return $this;
    }
}
