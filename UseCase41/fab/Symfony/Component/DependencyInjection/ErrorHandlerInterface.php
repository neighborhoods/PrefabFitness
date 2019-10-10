<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Symfony\Component\DependencyInjection;

interface ErrorHandlerInterface
{
    public function __invoke(
        int $error_number,
        string $error_string,
        string $error_file,
        int $error_line
    ): ErrorHandlerInterface;
}