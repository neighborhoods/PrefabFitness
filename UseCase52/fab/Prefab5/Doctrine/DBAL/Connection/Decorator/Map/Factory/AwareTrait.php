<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\Map\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory;

    public function setDoctrineDBALConnectionDecoratorMapFactory(
        FactoryInterface $doctrineDBALConnectionDecoratorMapFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory = $doctrineDBALConnectionDecoratorMapFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMapFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMapFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorMapFactory);

        return $this;
    }
}
