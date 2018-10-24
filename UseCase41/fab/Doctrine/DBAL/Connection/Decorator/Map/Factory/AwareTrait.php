<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory;

    public function setDoctrineDBALConnectionDecoratorMapFactory(
        FactoryInterface $doctrineDBALConnectionDecoratorMapFactory
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory = $doctrineDBALConnectionDecoratorMapFactory;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMapFactory(): FactoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory;
    }

    protected function hasDoctrineDBALConnectionDecoratorMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMapFactory(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMapFactory);

        return $this;
    }
}
