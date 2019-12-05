<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNSInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52OpcacheDNS;

    public function setOpcacheDNS(DNSInterface $opcacheDNS): self
    {
        if ($this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNS is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNS = $opcacheDNS;

        return $this;
    }

    protected function getOpcacheDNS(): DNSInterface
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNS is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNS;
    }

    protected function hasOpcacheDNS(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNS);
    }

    protected function unsetOpcacheDNS(): self
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNS is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNS);

        return $this;
    }
}
