<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory;

    public function setOpcacheDNSFactory(FactoryInterface $opcacheDNSFactory): self
    {
        if ($this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory = $opcacheDNSFactory;

        return $this;
    }

    protected function getOpcacheDNSFactory(): FactoryInterface
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory;
    }

    protected function hasOpcacheDNSFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory);
    }

    protected function unsetOpcacheDNSFactory(): self
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSFactory);

        return $this;
    }
}
