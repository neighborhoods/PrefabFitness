<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Map;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\MapInterface;
use Neighborhoods\PrefabExamplesUseCase41\MV1;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV1\FFP\Area\Amenity\Builder\Factory\AwareTrait;
    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV1AreaAmenityMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $amenityBuilder = $this->getMV1AreaAmenityBuilderFactory()->create();
            $amenity = $amenityBuilder->setRecord($record)->build();
            $map->offsetSet($amenity->getId(), $amenity);
        }

        return $map;
    }

    protected function getRecords(): array
    {
        if ($this->records === null) {
            throw new \LogicException('Builder records has not been set.');
        }

        return $this->records;
    }

    public function setRecords(array $records): BuilderInterface
    {
        if ($this->records !== null) {
            throw new \LogicException('Builder records is already set.');
        }
        $this->records = $records;

        return $this;
    }
}
