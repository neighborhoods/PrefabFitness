<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Opcache\DNS;

use Neighborhoods\PrefabExamplesFunction41\Opcache\DNSInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): DNSInterface;
}
