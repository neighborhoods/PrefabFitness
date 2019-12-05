<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1;

interface ListingInterface extends \JsonSerializable
{
    public const TABLE_NAME = 'listings';

    public const PROP_ID = 'id';
    public const PROP_STREET_ADDRESS = 'street_address';
    public const PROP_CITY = 'city';
    public const PROP_STATE = 'state';
    public const PROP_POSTAL_CODE = 'postal_code';
    public const PROP_LATITUDE = 'latitude';
    public const PROP_LONGITUDE = 'longitude';
    public const PROP_BEDROOMS = 'bedrooms';
    public const PROP_BATHROOMS = 'bathrooms';
    public const PROP_LIST_PRICE = 'list_price';
    public const PROP_YEAR_BUILT = 'year_built';
    public const PROP_SQ_FT = 'sq_ft';
    public const PROP_PARKING_SPACES = 'parking_spaces';

    public function getId(): int;
    public function setId(int $id): ListingInterface;
    public function hasId(): bool;

    public function getStreetAddress(): string;
    public function setStreetAddress(string $street_address): ListingInterface;
    public function hasStreetAddress(): bool;

    public function getCity(): string;
    public function setCity(string $city): ListingInterface;
    public function hasCity(): bool;

    public function getState(): string;
    public function setState(string $state): ListingInterface;
    public function hasState(): bool;

    public function getPostalCode(): string;
    public function setPostalCode(string $postal_code): ListingInterface;
    public function hasPostalCode(): bool;

    public function getLatitude(): float;
    public function setLatitude(float $latitude): ListingInterface;
    public function hasLatitude(): bool;

    public function getLongitude(): float;
    public function setLongitude(float $longitude): ListingInterface;
    public function hasLongitude(): bool;

    public function getBedrooms(): int;
    public function setBedrooms(int $bedrooms): ListingInterface;
    public function hasBedrooms(): bool;

    public function getBathrooms(): int;
    public function setBathrooms(int $bathrooms): ListingInterface;
    public function hasBathrooms(): bool;

    public function getListPrice(): int;
    public function setListPrice(int $list_price): ListingInterface;
    public function hasListPrice(): bool;

    public function getYearBuilt(): int;
    public function setYearBuilt(int $year_built): ListingInterface;
    public function hasYearBuilt(): bool;

    public function getSqFt(): int;
    public function setSqFt(int $sq_ft): ListingInterface;
    public function hasSqFt(): bool;

    public function getParkingSpaces(): int;
    public function setParkingSpaces(int $parking_spaces): ListingInterface;
    public function hasParkingSpaces(): bool;
}
