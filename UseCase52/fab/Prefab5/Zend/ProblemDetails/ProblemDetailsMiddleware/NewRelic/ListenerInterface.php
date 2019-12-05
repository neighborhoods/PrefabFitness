<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Zend\ProblemDetails\ProblemDetailsMiddleware\NewRelic;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ListenerInterface
{
    public function __invoke(
        \Throwable $throwable,
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ListenerInterface;
}
