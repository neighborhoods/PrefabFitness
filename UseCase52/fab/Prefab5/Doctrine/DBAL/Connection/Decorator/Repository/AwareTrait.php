<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\Repository;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Doctrine\DBAL\Connection\Decorator\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository;

    public function setDoctrineDBALConnectionDecoratorRepository(
        RepositoryInterface $doctrineDBALConnectionDecoratorRepository
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository = $doctrineDBALConnectionDecoratorRepository;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorRepository(): RepositoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository;
    }

    protected function hasDoctrineDBALConnectionDecoratorRepository(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository);
    }

    protected function unsetDoctrineDBALConnectionDecoratorRepository(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52DoctrineDBALConnectionDecoratorRepository);

        return $this;
    }
}
