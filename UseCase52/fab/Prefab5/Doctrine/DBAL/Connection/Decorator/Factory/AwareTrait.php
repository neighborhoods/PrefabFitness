<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory;

    public function setDoctrineDBALConnectionDecoratorFactory(FactoryInterface $doctrineDBALConnectionDecoratorFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory = $doctrineDBALConnectionDecoratorFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorFactory);

        return $this;
    }
}
