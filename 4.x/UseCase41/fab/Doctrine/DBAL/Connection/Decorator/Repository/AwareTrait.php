<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\Repository;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine\DBAL\Connection\Decorator\RepositoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository;

    public function setDoctrineDBALConnectionDecoratorRepository(
        RepositoryInterface $doctrineDBALConnectionDecoratorRepository
    ): self {
        if ($this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository = $doctrineDBALConnectionDecoratorRepository;

        return $this;
    }

    protected function getDoctrineDBALConnectionDecoratorRepository(): RepositoryInterface
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository;
    }

    protected function hasDoctrineDBALConnectionDecoratorRepository(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository);
    }

    protected function unsetDoctrineDBALConnectionDecoratorRepository(): self
    {
        if (!$this->hasDoctrineDBALConnectionDecoratorRepository()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41DoctrineDBALConnectionDecoratorRepository);

        return $this;
    }
}
