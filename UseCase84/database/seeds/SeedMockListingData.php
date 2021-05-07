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
        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i < 5000; $i++)
        {
            $data[] = [
                self::COLUMN_STREET_ADDRESS => $faker->streetAddress,
                self::COLUMN_CITY => $faker->city,
                self::COLUMN_STATE => $faker->state,
                self::COLUMN_POSTAL_CODE => $faker->postcode,
                self::COLUMN_LATITUDE => $faker->latitude,
                self::COLUMN_LONGITUDE => $faker->longitude,
                self::COLUMN_BEDROOMS => $faker->numberBetween(0, 5),
                self::COLUMN_BATHROOMS => $faker->numberBetween(1, 3),
                self::COLUMN_LIST_PRICE => $faker->numberBetween(100000, 1000000),
                self::COLUMN_YEAR_BUILT => $faker->numberBetween(1970, 2019),
                self::COLUMN_SQ_FT => $faker->numberBetween(700, 4000),
                self::COLUMN_PARKING_SPACES => $faker->numberBetween(0, 5),
            ];

            if ($i % 500 === 0) {
                $this->table(self::TABLE_LISTINGS)->insert($data)->save();
                $data = [];
            }
        }

        $this->table(self::TABLE_LISTINGS)->insert($data)->save();
    }
}
