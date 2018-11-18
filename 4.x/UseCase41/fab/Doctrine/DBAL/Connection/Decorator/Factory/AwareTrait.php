<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\Factory;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory;

    public function setDoctrineDBALConnectionDecoratorFactory(FactoryInterface $doctrineDBALConnectionDecoratorFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory = $doctrineDBALConnectionDecoratorFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorFactory);

        return $this;
    }
}
