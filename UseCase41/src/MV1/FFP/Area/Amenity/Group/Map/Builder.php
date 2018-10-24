<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\MapInterface;
use Neighborhoods\PrefabExamplesUseCase41\MV1;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV1\FFP\Area\Amenity\Group\Builder\Factory\AwareTrait;
    /** @var array */
    protected $records;

    public function build(): MapInterface
    {
        $map = $this->getMV1AreaAmenityGroupMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $jsonDecodedRecord = $this->jsonDecode($record['amenities_details']);
            foreach ($jsonDecodedRecord as $groupRecord) {
                $groupBuilder = $this->getMV1AreaAmenityGroupBuilderFactory()->create();
                $group = $groupBuilder->setRecord($groupRecord)->build();
                $map->offsetSet($group->getId(), $group);
            }
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

    protected function jsonDecode(string $json): array
    {
        $decodedJson = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \UnexpectedValueException('Cannot JSON decode string.');
        }

        return $decodedJson;
    }
}
