<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Opcache\DNS\Factory;

use Neighborhoods\PrefabExamplesFunction41\Opcache\DNS\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory;

    public function setOpcacheDNSFactory(FactoryInterface $opcacheDNSFactory): self
    {
        if ($this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory = $opcacheDNSFactory;

        return $this;
    }

    protected function getOpcacheDNSFactory(): FactoryInterface
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory;
    }

    protected function hasOpcacheDNSFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory);
    }

    protected function unsetOpcacheDNSFactory(): self
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSFactory);

        return $this;
    }
}
