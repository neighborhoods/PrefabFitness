<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Zend\Expressive\Application\Decorator;

use Neighborhoods\PrefabExamplesUseCase41\Zend\Expressive\Application\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator;

    public function setZendExpressiveApplicationDecorator(DecoratorInterface $zendExpressiveApplicationDecorator): self
    {
        if ($this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator = $zendExpressiveApplicationDecorator;

        return $this;
    }

    protected function getZendExpressiveApplicationDecorator(): DecoratorInterface
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator;
    }

    protected function hasZendExpressiveApplicationDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator);
    }

    protected function unsetZendExpressiveApplicationDecorator(): self
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41ZendExpressiveApplicationDecorator);

        return $this;
    }
}
