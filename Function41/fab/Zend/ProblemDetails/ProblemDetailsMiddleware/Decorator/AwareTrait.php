<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Zend\ProblemDetails\ProblemDetailsMiddleware\Decorator;

use Neighborhoods\PrefabExamplesFunction41\Zend\ProblemDetails\ProblemDetailsMiddleware\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator;

    public function setZendProblemDetailsProblemDetailsMiddlewareDecorator(
        DecoratorInterface $zendProblemDetailsProblemDetailsMiddlewareDecorator
    ): self {
        if ($this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator = $zendProblemDetailsProblemDetailsMiddlewareDecorator;

        return $this;
    }

    protected function getZendProblemDetailsProblemDetailsMiddlewareDecorator(): DecoratorInterface
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator;
    }

    protected function hasZendProblemDetailsProblemDetailsMiddlewareDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator);
    }

    protected function unsetZendProblemDetailsProblemDetailsMiddlewareDecorator(): self
    {
        if (!$this->hasZendProblemDetailsProblemDetailsMiddlewareDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41ZendProblemDetailsProblemDetailsMiddlewareDecorator);

        return $this;
    }
}
