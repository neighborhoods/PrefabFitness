<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS\ErrorHandler;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS\ErrorHandlerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler;

    public function setOpcacheDNSErrorHandler(ErrorHandlerInterface $opcacheDNSErrorHandler): self
    {
        if ($this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler = $opcacheDNSErrorHandler;

        return $this;
    }

    protected function getOpcacheDNSErrorHandler(): ErrorHandlerInterface
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler;
    }

    protected function hasOpcacheDNSErrorHandler(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler);
    }

    protected function unsetOpcacheDNSErrorHandler(): self
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52OpcacheDNSErrorHandler);

        return $this;
    }
}
