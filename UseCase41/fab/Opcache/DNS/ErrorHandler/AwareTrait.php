<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS\ErrorHandler;

use Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS\ErrorHandlerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler;

    public function setOpcacheDNSErrorHandler(ErrorHandlerInterface $opcacheDNSErrorHandler): self
    {
        if ($this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler = $opcacheDNSErrorHandler;

        return $this;
    }

    protected function getOpcacheDNSErrorHandler(): ErrorHandlerInterface
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler;
    }

    protected function hasOpcacheDNSErrorHandler(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler);
    }

    protected function unsetOpcacheDNSErrorHandler(): self
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41OpcacheDNSErrorHandler);

        return $this;
    }
}
