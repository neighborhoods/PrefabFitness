<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\PDO\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\PDO\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory;

    public function setPDOBuilderFactory(FactoryInterface $pDOBuilderFactory): self
    {
        if ($this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory = $pDOBuilderFactory;

        return $this;
    }

    protected function getPDOBuilderFactory(): FactoryInterface
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory;
    }

    protected function hasPDOBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory);
    }

    protected function unsetPDOBuilderFactory(): self
    {
        if (!$this->hasPDOBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41PDOBuilderFactory);

        return $this;
    }
}
