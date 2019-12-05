<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelic\TransactionNameMiddlewareInterface;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\NewRelicInterface;

interface DecoratorInterface extends TransactionNameMiddlewareInterface
{
    public function setNewRelic(NewRelicInterface $newRelic);
}
