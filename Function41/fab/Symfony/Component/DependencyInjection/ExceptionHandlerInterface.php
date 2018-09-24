<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\Symfony\Component\DependencyInjection;

interface ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface;
}
