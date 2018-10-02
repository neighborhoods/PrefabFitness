<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41Test\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesFunction41\Protean\Container\Builder;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testGet(): RepositoryTest
    {
        $proteanContainerBuilder = (new Builder())->setApplicationRootDirectoryPath(realpath(__DIR__ . '/../../../../../../../../Function41'));
        $container = $proteanContainerBuilder->build();
        $repository = $container->get('Neighborhoods\PrefabExamplesFunction41\MV1\FFP\Area\Amenity\Group\Map\RepositoryInterface');

        return $this;
    }
}
