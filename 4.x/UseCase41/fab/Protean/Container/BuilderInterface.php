<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Protean\Container;

use Psr\Container\ContainerInterface;

interface BuilderInterface
{
    public function build(): ContainerInterface;
}
