<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Opcache\DNS;

use Neighborhoods\PrefabExamplesUseCase41\Opcache\DNSInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): DNSInterface;
}
