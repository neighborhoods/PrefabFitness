<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\PDO\Builder;

use Neighborhoods\PrefabExamplesUseCase41\PDO\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41PDOBuilder;

    public function setPDOBuilder(BuilderInterface $pDOBuilder): self
    {
        if ($this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41PDOBuilder = $pDOBuilder;

        return $this;
    }

    protected function getPDOBuilder(): BuilderInterface
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41PDOBuilder;
    }

    protected function hasPDOBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41PDOBuilder);
    }

    protected function unsetPDOBuilder(): self
    {
        if (!$this->hasPDOBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41PDOBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41PDOBuilder);

        return $this;
    }
}
