<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddleware;

use Neighborhoods\PrefabExamplesFunction41\NewRelic\TransactionNameMiddlewareInterface;
use Neighborhoods\PrefabExamplesFunction41\NewRelicInterface;

interface DecoratorInterface extends TransactionNameMiddlewareInterface
{
    public function setNewRelic(NewRelicInterface $newRelic);
}
