<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesUseCase41\NewRelic\TransactionNameMiddlewareInterface;
use Neighborhoods\PrefabExamplesUseCase41\NewRelicInterface;

interface DecoratorInterface extends TransactionNameMiddlewareInterface
{
    public function setNewRelic(NewRelicInterface $newRelic);
}
