<?php
declare(strict_types=1);
namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

class Builder implements BuilderInterface
{

    use Listing\Map\Factory\AwareTrait;
    use Listing\Builder\Factory\AwareTrait;

    /**
     * @var array
     */
    protected $records = null;

    public function build() : MapInterface
    {
        $map = $this->getV1ListingMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $builder = $this->getV1ListingBuilderFactory()->create();
            $item = $builder->setRecord($record)->build();
            $map[$item->getId()] = $item;
        }

        return $map;
    }

    public function buildForInsert() : MapInterface
    {
        $map = $this->getV1ListingMapFactory()->create();
        foreach ($this->getRecords() as $index => $record) {
            $builder = $this->getV1ListingBuilderFactory()->create();
            $item = $builder->setRecord($record)->buildForInsert();
            $itemIndex = $item->hasId() ? $item->getId() : $index;
            $map[$itemIndex] = $item;
        }

        return $map;
    }

    protected function getRecords() : array
    {
        if ($this->records === null) {
            throw new \LogicException('Builder records has not been set.');
        }

        return $this->records;
    }

    public function setRecords(array $records) : BuilderInterface
    {
        if ($this->records !== null) {
            throw new \LogicException('Builder records is already set.');
        }

        $this->records = $records;

        return $this;
    }
}

