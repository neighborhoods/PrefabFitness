<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Zend\Expressive\Application\Decorator;

use Neighborhoods\PrefabExamplesFunction41\Zend\Expressive\Application\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator;

    public function setZendExpressiveApplicationDecorator(DecoratorInterface $zendExpressiveApplicationDecorator): self
    {
        if ($this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator = $zendExpressiveApplicationDecorator;

        return $this;
    }

    protected function getZendExpressiveApplicationDecorator(): DecoratorInterface
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator;
    }

    protected function hasZendExpressiveApplicationDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator);
    }

    protected function unsetZendExpressiveApplicationDecorator(): self
    {
        if (!$this->hasZendExpressiveApplicationDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41ZendExpressiveApplicationDecorator);

        return $this;
    }
}
