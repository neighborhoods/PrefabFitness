<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS\Factory;

use Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory;

    public function setOpcacheDNSFactory(FactoryInterface $opcacheDNSFactory): self
    {
        if ($this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory = $opcacheDNSFactory;

        return $this;
    }

    protected function getOpcacheDNSFactory(): FactoryInterface
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory;
    }

    protected function hasOpcacheDNSFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory);
    }

    protected function unsetOpcacheDNSFactory(): self
    {
        if (!$this->hasOpcacheDNSFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSFactory);

        return $this;
    }
}
