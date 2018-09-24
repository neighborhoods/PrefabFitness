<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Opcache\DNS\ErrorHandler;

use Neighborhoods\PrefabExamplesFunction41\Opcache\DNS\ErrorHandlerInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler;

    public function setOpcacheDNSErrorHandler(ErrorHandlerInterface $opcacheDNSErrorHandler): self
    {
        if ($this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler is already set.');
        }
        $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler = $opcacheDNSErrorHandler;

        return $this;
    }

    protected function getOpcacheDNSErrorHandler(): ErrorHandlerInterface
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler;
    }

    protected function hasOpcacheDNSErrorHandler(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler);
    }

    protected function unsetOpcacheDNSErrorHandler(): self
    {
        if (!$this->hasOpcacheDNSErrorHandler()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesFunction41OpcacheDNSErrorHandler);

        return $this;
    }
}
