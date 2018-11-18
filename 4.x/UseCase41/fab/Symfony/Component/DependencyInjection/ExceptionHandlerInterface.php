<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Symfony\Component\DependencyInjection;

interface ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface;
}
