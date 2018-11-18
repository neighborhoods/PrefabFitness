<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\Map;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap;

    public function setDoctrineDBALConnectionDecoratorMap(MapInterface $doctrineDBALConnectionDecoratorMap): self
    {
        if ($this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap = $doctrineDBALConnectionDecoratorMap;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorMap(): MapInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap;
    }

    protected function hasDoctrineDBALConnectionDecoratorMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap);
    }

    protected function unsetDoctrineDBALConnectionDecoratorMap(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorMap);

        return $this;
    }
}
