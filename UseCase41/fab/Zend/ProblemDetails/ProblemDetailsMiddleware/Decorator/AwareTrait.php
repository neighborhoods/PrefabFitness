<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Zend\ProblemDetails\ProblemDetailsMiddleware\Decorator;

use Neighborhoods\PrefabExamplesUseCase41\Zend\ProblemDetails\ProblemDetailsMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator;

    public function setZendProblemDetailsProblemDetailsMiddlewareDecorator(
        DecoratorInterface $zendProblemDetailsProblemDetailsMiddlewareDecorator
    ): self {
        if ($this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator = $zendProblemDetailsProblemDetailsMiddlewareDecorator;

        return $this;
    }

    protected function getZendProblemDetailsProblemDetailsMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator;
    }

    protected function hasZendProblemDetailsProblemDetailsMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator);
    }

    protected function unsetZendProblemDetailsProblemDetailsMiddlewareDecorator(): self
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41ZendProblemDetailsProblemDetailsMiddlewareDecorator);

        return $this;
    }
}
