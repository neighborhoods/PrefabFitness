<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Zend\Expressive\Application\Decorator;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Zend\Expressive\Application\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator;

    public function setZendExpressiveApplicationDecorator(DecoratorInterface $zendExpressiveApplicationDecorator): self
    {
        if ($this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator = $zendExpressiveApplicationDecorator;

        return $this;
    }

    protected function getZendExpressiveApplicationDecorator(): DecoratorInterface
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator;
    }

    protected function hasZendExpressiveApplicationDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator);
    }

    protected function unsetZendExpressiveApplicationDecorator(): self
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52ZendExpressiveApplicationDecorator);

        return $this;
    }
}
