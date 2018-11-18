<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\GroupInterface;
use Neighborhoods\PrefabExamplesUseCase41\MV1;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use MV1\FFP\Area\Amenity\Map\Builder\Factory\AwareTrait;
    /** @var array */
    protected $record;

    public function build(): GroupInterface
    {
        $group = $this->getMV1AreaAmenityGroupFactory()->create();
        $record = $this->getRecord();
        $group->setId($record['id']);
        $group->setAreaKey($record['area_key']);
        $group->setTitle($record['title']);
        $group->setDescription($record['description'] ?? ''); // @team
        $group->setOrder($record['order']);
        $amenityMapBuilder = $this->getMV1AreaAmenityMapBuilderFactory()->create();
        $amenityMapBuilder->setRecords($record['amenities']);
        $group->setAmenities($amenityMapBuilder->build());

        return $group;
    }

    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new \LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new \LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }
}
