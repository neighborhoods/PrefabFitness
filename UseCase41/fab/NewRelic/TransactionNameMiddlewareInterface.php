<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\NewRelic;

use Neighborhoods\PrefabExamplesUseCase41\NewRelicInterface;
use Psr\Http\Server\MiddlewareInterface;

interface TransactionNameMiddlewareInterface extends MiddlewareInterface
{
    public function setApplicationName(string $application_name): TransactionNameMiddlewareInterface;

    public function setNewRelic(NewRelicInterface $newRelic);
}
