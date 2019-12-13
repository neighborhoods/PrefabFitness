<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Repository;

use Jaeger\Config;
use Jaeger\Jaeger;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\HTTP\SearchCriteriaBuilderException;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Repository;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

class Handler implements HandlerInterface
{

    use Repository\AwareTrait;
    use Prefab5\Psr\Http\Message\ServerRequest\AwareTrait;
    use Prefab5\SearchCriteria\ServerRequest\Builder\Factory\AwareTrait;


    /** @var Config */
    protected $tracingConfig;
    /** @var Jaeger */
    protected $tracer;

    public function handle(\Psr\Http\Message\ServerRequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        //init server span start
        $config = Config::getInstance();
        $this->setTracingConfig($config);

        //start tracing
        $this->setTracer($this->getTracingConfig()->initTracer('listings', 'jaeger:6831'));
        $handlerSpan = $this->getTracer()->startActiveSpan('ListingHandler-Handler');

        $this->setPsrHttpMessageServerRequest($request);
        $method = $this->getPsrHttpMessageServerRequest()->getMethod();

        if (!method_exists($this, $method)) {
            throw new \RuntimeException('Unhandled HTTP method: ' . $method);
        }


        $jsonResponse = new \Zend\Diactoros\Response\JsonResponse($this->$method());
        $handlerSpan->close();

        //Flushing the spans should be moved to the post request execution handler
        $this->getTracingConfig()->flush();
        return $jsonResponse;
    }

    public function getTracingConfig() : Config
    {
        if ($this->tracingConfig === null) {
            throw new \LogicException('Handler tracingConfig has not been set.');
        }

        return $this->tracingConfig;
    }

    public function setTracingConfig(Config $tracingConfig) : HandlerInterface
    {
        if ($this->tracingConfig !== null) {
            throw new \LogicException('Handler tracingConfig is already set.');
        }

        $this->tracingConfig = $tracingConfig;

        return $this;
    }

    public function getTracer() : Jaeger
    {
        if ($this->tracer === null) {
            throw new \LogicException('Handler tracer has not been set.');
        }

        return $this->tracer;
    }

    public function setTracer(Jaeger $tracer) : HandlerInterface
    {
        if ($this->tracer !== null) {
            throw new \LogicException('Handler tracer is already set.');
        }

        $this->tracer = $tracer;

        return $this;
    }

    protected function get() : MapInterface
    {
        $handlerSpan = $this->getTracer()->startActiveSpan('ListingHandler-get');
        $searchCriteriaBuilder = $this->getSearchCriteriaServerRequestBuilderFactory()->create();
        $searchCriteriaBuilder->setPsrHttpMessageServerRequest($this->getPsrHttpMessageServerRequest());
        try {
            $searchCriteria = $searchCriteriaBuilder->build();
            $map = $this->getV1ListingMapRepository()->setTracer($this->getTracer())->get($searchCriteria);
            $handlerSpan->getSpan()->setTag('listings_found', $map->count());
            $handlerSpan->close();
            return $map;
        } catch (\LogicException $exception) {
            $handlerSpan->getSpan()->setTag('error', true);
            $handlerSpan->close();
            throw new SearchCriteriaBuilderException($exception->getMessage());
        }
    }

    protected function post()
    {

    }

    protected function put()
    {

    }

    protected function patch()
    {

    }

    protected function delete()
    {

    }

    protected function getRouteResult() : \Zend\Expressive\Router\RouteResult
    {
        return $this->getPsrHttpMessageServerRequest()->getAttribute(\Zend\Expressive\Router\RouteResult::class);
    }
}

