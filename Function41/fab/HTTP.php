<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41;

use Neighborhoods\PrefabExamplesFunction41\Protean;
use Zend\Expressive\Application;

class HTTP implements HTTPInterface
{
    use Protean\Container\Builder\AwareTrait;

    public function respond(): HTTPInterface
    {
        $application = $this->getProteanContainerBuilder()->build()->get(Application::class);
        $application->run();

        return $this;
    }
}
