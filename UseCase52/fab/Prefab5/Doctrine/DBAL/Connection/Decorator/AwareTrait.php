<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator;

    public function setDoctrineDBALConnectionDecorator(DecoratorInterface $doctrineDBALConnectionDecorator): self
    {
        if ($this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator = $doctrineDBALConnectionDecorator;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecorator(): DecoratorInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator;
    }

    protected function hasDoctrineDBALConnectionDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator);
    }

    protected function unsetDoctrineDBALConnectionDecorator(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecorator);

        return $this;
    }
}
