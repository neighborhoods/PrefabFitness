<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map\Repository;

use Psr\Http\Server\RequestHandlerInterface;

interface HandlerInterface extends RequestHandlerInterface
{
    public const ROUTE_NAME_MAP = '/mv1/ffp/area/amenity/group/map/';
    public const ROUTE_PATH_MAP = self::ROUTE_NAME_MAP . '{searchCriteria:}';
}
