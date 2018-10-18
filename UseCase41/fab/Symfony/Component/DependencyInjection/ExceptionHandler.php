<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Symfony\Component\DependencyInjection;

use Neighborhoods\PrefabExamplesUseCase41\NewRelic;

class ExceptionHandler implements ExceptionHandlerInterface
{
    public function __invoke(\Throwable $throwable): ExceptionHandlerInterface
    {
        (new NewRelic())->noticeThrowable($throwable);

        return $this;
    }
}
