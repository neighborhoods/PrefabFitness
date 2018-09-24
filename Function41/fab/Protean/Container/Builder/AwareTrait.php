<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Protean\Container\Builder;

use Neighborhoods\PrefabExamplesFunction41\Protean\Container\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder;

    public function setProteanContainerBuilder(BuilderInterface $proteanContainerBuilder): self
    {
        if ($this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder = $proteanContainerBuilder;

        return $this;
    }

    protected function getProteanContainerBuilder(): BuilderInterface
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder;
    }

    protected function hasProteanContainerBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder);
    }

    protected function unsetProteanContainerBuilder(): self
    {
        if (!$this->hasProteanContainerBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41ProteanContainerBuilder);

        return $this;
    }
}
