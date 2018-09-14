<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\Repository;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouteResult;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria;
use Neighborhoods\PrefabExamplesFunction41\Psr;
use Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\MapInterface;

class Handler implements HandlerInterface
{
    use AwareTrait;
    use Psr\Http\Message\ServerRequest\AwareTrait;
    use SearchCriteria\ServerRequest\Builder\Factory\AwareTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->setPsrHttpMessageServerRequest($request);

        return new JsonResponse($this->getMap());
    }

    protected function getMap(): MapInterface
    {
        $searchCriteriaBuilder = $this->getSearchCriteriaServerRequestBuilderFactory()->create();
        $searchCriteriaBuilder->setPsrHttpMessageServerRequest($this->getPsrHttpMessageServerRequest());
        $searchCriteria = $searchCriteriaBuilder->build();
        $map = $this->getMV1AreaAmenityGroupMapRepository()->get($searchCriteria);

        return $map;
    }

    protected function getRouteResult(): RouteResult
    {
        return $this->getPsrHttpMessageServerRequest()->getAttribute(RouteResult::class);
    }
}
