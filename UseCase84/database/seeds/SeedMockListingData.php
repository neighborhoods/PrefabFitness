<?php


use Phinx\Seed\AbstractSeed;

class SeedMockListingData extends AbstractSeed
{

    protected const TABLE_LISTINGS = 'listings';

    protected const COLUMN_STREET_ADDRESS = 'street_address';
    protected const COLUMN_CITY = 'city';
    protected const COLUMN_STATE = 'state';
    protected const COLUMN_POSTAL_CODE = 'postal_code';
    protected const COLUMN_LATITUDE = 'latitude';
    protected const COLUMN_LONGITUDE = 'longitude';
    protected const COLUMN_BEDROOMS = 'bedrooms';
    protected const COLUMN_BATHROOMS = 'bathrooms';
    protected const COLUMN_LIST_PRICE = 'list_price';
    protected const COLUMN_YEAR_BUILT = 'year_built';
    protected const COLUMN_SQ_FT = 'sq_ft';
    protected const COLUMN_PARKING_SPACES = 'parking_spaces';

    public function run()
    {
        $data = [];

        for ($i = 0; $i < 5000; $i++)
        {
            $data[] = [
                self::COLUMN_STREET_ADDRESS => 'street' . $i,
                self::COLUMN_CITY => 'city' . $i,
                self::COLUMN_STATE => 'state' . $i,
                self::COLUMN_POSTAL_CODE => 'postcode' . $i,
                self::COLUMN_LATITUDE => $i % 180 - 90,
                self::COLUMN_LONGITUDE => $i/180,
                self::COLUMN_BEDROOMS => $i % 4 + 1,
                self::COLUMN_BATHROOMS => $i % 3 + 1,
                self::COLUMN_LIST_PRICE => $i + 100000,
                self::COLUMN_YEAR_BUILT => $i % 50 + 1970,
                self::COLUMN_SQ_FT => $i % 3000 + 700,
                self::COLUMN_PARKING_SPACES => $i % 6,
            ];

            if ($i % 500 === 0) {
                $this->table(self::TABLE_LISTINGS)->insert($data)->save();
                $data = [];
            }
        }

        $this->table(self::TABLE_LISTINGS)->insert($data)->save();
    }
}
