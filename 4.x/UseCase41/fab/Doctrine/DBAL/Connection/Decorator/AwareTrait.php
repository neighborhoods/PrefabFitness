<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\DecoratorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator;

    public function setDoctrineDBALConnectionDecorator(DecoratorInterface $doctrineDBALConnectionDecorator): self
    {
        if ($this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator = $doctrineDBALConnectionDecorator;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecorator(): DecoratorInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator;
    }

    protected function hasDoctrineDBALConnectionDecorator(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator);
    }

    protected function unsetDoctrineDBALConnectionDecorator(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecorator()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecorator);

        return $this;
    }
}
