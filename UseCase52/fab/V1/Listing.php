<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1;

class Listing implements ListingInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $street_address;

    /** @var string */
    private $city;

    /** @var string */
    private $state;

    /** @var string */
    private $postal_code;

    /** @var float */
    private $latitude;

    /** @var float */
    private $longitude;

    /** @var int */
    private $bedrooms;

    /** @var int */
    private $bathrooms;

    /** @var int */
    private $list_price;

    /** @var int */
    private $year_built;

    /** @var int */
    private $sq_ft;

    /** @var int */
    private $parking_spaces;

     public function getId(): int
     {
         if ($this->id === null) {
             throw new \LogicException('id has not been set');
         }
         
         return $this->id;
     }
     
     public function setId(int $id): ListingInterface
     {
         if ($this->id !== null) {
             throw new \LogicException('id has already been set');
         }
         
         $this->id = $id;
         return $this;
     }
     
     public function hasId(): bool
     {
        return $this->id !== null;
     }
     

     public function getStreetAddress(): string
     {
         if ($this->street_address === null) {
             throw new \LogicException('street_address has not been set');
         }
         
         return $this->street_address;
     }
     
     public function setStreetAddress(string $street_address): ListingInterface
     {
         if ($this->street_address !== null) {
             throw new \LogicException('street_address has already been set');
         }
         
         $this->street_address = $street_address;
         return $this;
     }
     
     public function hasStreetAddress(): bool
     {
        return $this->street_address !== null;
     }
     

     public function getCity(): string
     {
         if ($this->city === null) {
             throw new \LogicException('city has not been set');
         }
         
         return $this->city;
     }
     
     public function setCity(string $city): ListingInterface
     {
         if ($this->city !== null) {
             throw new \LogicException('city has already been set');
         }
         
         $this->city = $city;
         return $this;
     }
     
     public function hasCity(): bool
     {
        return $this->city !== null;
     }
     

     public function getState(): string
     {
         if ($this->state === null) {
             throw new \LogicException('state has not been set');
         }
         
         return $this->state;
     }
     
     public function setState(string $state): ListingInterface
     {
         if ($this->state !== null) {
             throw new \LogicException('state has already been set');
         }
         
         $this->state = $state;
         return $this;
     }
     
     public function hasState(): bool
     {
        return $this->state !== null;
     }
     

     public function getPostalCode(): string
     {
         if ($this->postal_code === null) {
             throw new \LogicException('postal_code has not been set');
         }
         
         return $this->postal_code;
     }
     
     public function setPostalCode(string $postal_code): ListingInterface
     {
         if ($this->postal_code !== null) {
             throw new \LogicException('postal_code has already been set');
         }
         
         $this->postal_code = $postal_code;
         return $this;
     }
     
     public function hasPostalCode(): bool
     {
        return $this->postal_code !== null;
     }
     

     public function getLatitude(): float
     {
         if ($this->latitude === null) {
             throw new \LogicException('latitude has not been set');
         }
         
         return $this->latitude;
     }
     
     public function setLatitude(float $latitude): ListingInterface
     {
         if ($this->latitude !== null) {
             throw new \LogicException('latitude has already been set');
         }
         
         $this->latitude = $latitude;
         return $this;
     }
     
     public function hasLatitude(): bool
     {
        return $this->latitude !== null;
     }
     

     public function getLongitude(): float
     {
         if ($this->longitude === null) {
             throw new \LogicException('longitude has not been set');
         }
         
         return $this->longitude;
     }
     
     public function setLongitude(float $longitude): ListingInterface
     {
         if ($this->longitude !== null) {
             throw new \LogicException('longitude has already been set');
         }
         
         $this->longitude = $longitude;
         return $this;
     }
     
     public function hasLongitude(): bool
     {
        return $this->longitude !== null;
     }
     

     public function getBedrooms(): int
     {
         if ($this->bedrooms === null) {
             throw new \LogicException('bedrooms has not been set');
         }
         
         return $this->bedrooms;
     }
     
     public function setBedrooms(int $bedrooms): ListingInterface
     {
         if ($this->bedrooms !== null) {
             throw new \LogicException('bedrooms has already been set');
         }
         
         $this->bedrooms = $bedrooms;
         return $this;
     }
     
     public function hasBedrooms(): bool
     {
        return $this->bedrooms !== null;
     }
     

     public function getBathrooms(): int
     {
         if ($this->bathrooms === null) {
             throw new \LogicException('bathrooms has not been set');
         }
         
         return $this->bathrooms;
     }
     
     public function setBathrooms(int $bathrooms): ListingInterface
     {
         if ($this->bathrooms !== null) {
             throw new \LogicException('bathrooms has already been set');
         }
         
         $this->bathrooms = $bathrooms;
         return $this;
     }
     
     public function hasBathrooms(): bool
     {
        return $this->bathrooms !== null;
     }
     

     public function getListPrice(): int
     {
         if ($this->list_price === null) {
             throw new \LogicException('list_price has not been set');
         }
         
         return $this->list_price;
     }
     
     public function setListPrice(int $list_price): ListingInterface
     {
         if ($this->list_price !== null) {
             throw new \LogicException('list_price has already been set');
         }
         
         $this->list_price = $list_price;
         return $this;
     }
     
     public function hasListPrice(): bool
     {
        return $this->list_price !== null;
     }
     

     public function getYearBuilt(): int
     {
         if ($this->year_built === null) {
             throw new \LogicException('year_built has not been set');
         }
         
         return $this->year_built;
     }
     
     public function setYearBuilt(int $year_built): ListingInterface
     {
         if ($this->year_built !== null) {
             throw new \LogicException('year_built has already been set');
         }
         
         $this->year_built = $year_built;
         return $this;
     }
     
     public function hasYearBuilt(): bool
     {
        return $this->year_built !== null;
     }
     

     public function getSqFt(): int
     {
         if ($this->sq_ft === null) {
             throw new \LogicException('sq_ft has not been set');
         }
         
         return $this->sq_ft;
     }
     
     public function setSqFt(int $sq_ft): ListingInterface
     {
         if ($this->sq_ft !== null) {
             throw new \LogicException('sq_ft has already been set');
         }
         
         $this->sq_ft = $sq_ft;
         return $this;
     }
     
     public function hasSqFt(): bool
     {
        return $this->sq_ft !== null;
     }
     

     public function getParkingSpaces(): int
     {
         if ($this->parking_spaces === null) {
             throw new \LogicException('parking_spaces has not been set');
         }
         
         return $this->parking_spaces;
     }
     
     public function setParkingSpaces(int $parking_spaces): ListingInterface
     {
         if ($this->parking_spaces !== null) {
             throw new \LogicException('parking_spaces has already been set');
         }
         
         $this->parking_spaces = $parking_spaces;
         return $this;
     }
     
     public function hasParkingSpaces(): bool
     {
        return $this->parking_spaces !== null;
     }
     

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
