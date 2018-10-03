<?php
declare(strict_types=1);

use Neighborhoods\Function42\MV1;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

return function (Definition $applicationServiceDefinition, ContainerBuilder $containerBuilder) : void {

    $mv1UserHandlerServiceDefinition = $containerBuilder->findDefinition(MV1\User\Repository\HandlerInterface::class);
    $applicationServiceDefinition->addMethodCall(
        'get',
        ['/mv1/users/{searchCriteria:}', $mv1UserHandlerServiceDefinition, MV1\User\Repository\HandlerInterface::ROUTE_NAME_USERS]
    );
};
