<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS;

use Neighborhoods\PrefabExamplesUseCase41\Opcache\DNSInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): DNSInterface
    {
        return clone $this->getOpcacheDNS();
    }
}
