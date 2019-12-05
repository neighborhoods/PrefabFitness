<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Symfony\Component\DependencyInjection;

/**
 * @deprecated
 * @see \Neighborhoods\PrefabFitnessUseCase52\Prefab5\ExceptionHandlerInterface
 */
interface ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface;
}
