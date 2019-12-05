<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\Decorator;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator;

    public function setZendProblemDetailsProblemDetailsMiddlewareDecorator(
        DecoratorInterface $zendProblemDetailsProblemDetailsMiddlewareDecorator
    ): self {
        if ($this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator = $zendProblemDetailsProblemDetailsMiddlewareDecorator;

        return $this;
    }

    protected function getZendProblemDetailsProblemDetailsMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator;
    }

    protected function hasZendProblemDetailsProblemDetailsMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator);
    }

    protected function unsetZendProblemDetailsProblemDetailsMiddlewareDecorator(): self
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52ZendProblemDetailsProblemDetailsMiddlewareDecorator);

        return $this;
    }
}
