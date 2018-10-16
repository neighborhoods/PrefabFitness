<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS;

use Neighborhoods\PrefabExamplesUseCase41\Opcache\DNSInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41OpcacheDNS;

    public function setOpcacheDNS(DNSInterface $opcacheDNS): self
    {
        if ($this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNS is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNS = $opcacheDNS;

        return $this;
    }

    protected function getOpcacheDNS(): DNSInterface
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNS is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNS;
    }

    protected function hasOpcacheDNS(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNS);
    }

    protected function unsetOpcacheDNS(): self
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNS is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNS);

        return $this;
    }
}
