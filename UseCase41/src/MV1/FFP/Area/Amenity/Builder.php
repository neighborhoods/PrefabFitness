<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\AmenityInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    /** @var array */
    protected $record;

    public function build(): AmenityInterface
    {
        $amenity = $this->getMV1AreaAmenityFactory()->create();
        $record = $this->getRecord();
        $amenity->setId($record['id']);
        $amenity->setAmenityId($record['amenity_id']);
        $amenity->setName($record['name']);
        $amenity->setAlias($record['alias']);
        $amenity->setOrder($record['order']);

        return $amenity;
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
