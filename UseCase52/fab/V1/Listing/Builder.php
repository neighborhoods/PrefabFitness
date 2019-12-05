<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing;

use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    protected $record;

    public function build(): ListingInterface
    {
        $Listing = $this->getV1ListingFactory()->create();

        $record = $this->getRecord();

   		$Listing->setId($record[ListingInterface::PROP_ID]);
   		$Listing->setStreetAddress($record[ListingInterface::PROP_STREET_ADDRESS]);
   		$Listing->setCity($record[ListingInterface::PROP_CITY]);
   		$Listing->setState($record[ListingInterface::PROP_STATE]);
   		$Listing->setPostalCode($record[ListingInterface::PROP_POSTAL_CODE]);
        if (isset($record[ListingInterface::PROP_LATITUDE])) {
            $Listing->setLatitude((float)$record[ListingInterface::PROP_LATITUDE]);
        }
        if (isset($record[ListingInterface::PROP_LONGITUDE])) {
            $Listing->setLongitude((float)$record[ListingInterface::PROP_LONGITUDE]);
        }
   		$Listing->setBedrooms($record[ListingInterface::PROP_BEDROOMS]);
   		$Listing->setBathrooms($record[ListingInterface::PROP_BATHROOMS]);
   		$Listing->setListPrice($record[ListingInterface::PROP_LIST_PRICE]);
   		$Listing->setYearBuilt($record[ListingInterface::PROP_YEAR_BUILT]);
   		$Listing->setSqFt($record[ListingInterface::PROP_SQ_FT]);
   		$Listing->setParkingSpaces($record[ListingInterface::PROP_PARKING_SPACES]);


        return $Listing;
    }

    public function buildForInsert(): ListingInterface
    {
        $Listing = $this->getV1ListingFactory()->create();

        $record = $this->getRecord();

   		$Listing->setId($record[ListingInterface::PROP_ID]);
   		$Listing->setStreetAddress($record[ListingInterface::PROP_STREET_ADDRESS]);
   		$Listing->setCity($record[ListingInterface::PROP_CITY]);
   		$Listing->setState($record[ListingInterface::PROP_STATE]);
   		$Listing->setPostalCode($record[ListingInterface::PROP_POSTAL_CODE]);
        if (isset($record[ListingInterface::PROP_LATITUDE])) {
            $Listing->setLatitude((float)$record[ListingInterface::PROP_LATITUDE]);
        }
        if (isset($record[ListingInterface::PROP_LONGITUDE])) {
            $Listing->setLongitude((float)$record[ListingInterface::PROP_LONGITUDE]);
        }
   		$Listing->setBedrooms($record[ListingInterface::PROP_BEDROOMS]);
   		$Listing->setBathrooms($record[ListingInterface::PROP_BATHROOMS]);
   		$Listing->setListPrice($record[ListingInterface::PROP_LIST_PRICE]);
   		$Listing->setYearBuilt($record[ListingInterface::PROP_YEAR_BUILT]);
   		$Listing->setSqFt($record[ListingInterface::PROP_SQ_FT]);
   		$Listing->setParkingSpaces($record[ListingInterface::PROP_PARKING_SPACES]);


        return $Listing;
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
