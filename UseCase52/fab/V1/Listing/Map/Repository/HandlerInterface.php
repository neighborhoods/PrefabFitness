<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Repository;

interface HandlerInterface extends \Psr\Http\Server\RequestHandlerInterface
{
    const ROUTE_PATH_V1LISTINGS = '/v1/listing/{searchCriteria:}';
    const ROUTE_NAME_V1LISTINGS = 'V1LISTING';
}

