<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\NewRelic;

use Neighborhoods\PrefabExamplesFunction41\NewRelicInterface;
use Psr\Http\Server\MiddlewareInterface;

interface TransactionNameMiddlewareInterface extends MiddlewareInterface
{
    public function setApplicationName(string $application_name): TransactionNameMiddlewareInterface;

    public function setNewRelic(NewRelicInterface $newRelic);
}
