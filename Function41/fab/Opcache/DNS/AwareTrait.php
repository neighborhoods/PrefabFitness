<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Opcache\DNS;

use Neighborhoods\PrefabExamplesFunction41\Opcache\DNSInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41OpcacheDNS;

    public function setOpcacheDNS(DNSInterface $opcacheDNS): self
    {
        if ($this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNS is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNS = $opcacheDNS;

        return $this;
    }

    protected function getOpcacheDNS(): DNSInterface
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNS is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNS;
    }

    protected function hasOpcacheDNS(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNS);
    }

    protected function unsetOpcacheDNS(): self
    {
        if (!$this->hasOpcacheDNS()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNS is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNS);

        return $this;
    }
}
