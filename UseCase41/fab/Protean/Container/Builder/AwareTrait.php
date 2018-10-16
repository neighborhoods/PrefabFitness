<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Protean\Container\Builder;

use Neighborhoods\PrefabExamplesUseCase41\Protean\Container\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder;

    public function setProteanContainerBuilder(BuilderInterface $proteanContainerBuilder): self
    {
        if ($this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder = $proteanContainerBuilder;

        return $this;
    }

    protected function getProteanContainerBuilder(): BuilderInterface
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder;
    }

    protected function hasProteanContainerBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder);
    }

    protected function unsetProteanContainerBuilder(): self
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41ProteanContainerBuilder);

        return $this;
    }
}
