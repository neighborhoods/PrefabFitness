<?php

use Phinx\Db\Adapter\PostgresAdapter;
use Phinx\Migration\AbstractMigration;

class CreateListingTable extends AbstractMigration
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

    public function change()
    {
        $this->table(self::TABLE_LISTINGS)
            ->addColumn(self::COLUMN_STREET_ADDRESS, PostgresAdapter::PHINX_TYPE_STRING, ['null' => false])
            ->addColumn(self::COLUMN_CITY, PostgresAdapter::PHINX_TYPE_STRING, ['null' => false])
            ->addColumn(self::COLUMN_STATE, PostgresAdapter::PHINX_TYPE_STRING, ['null' => false])
            ->addColumn(self::COLUMN_POSTAL_CODE, PostgresAdapter::PHINX_TYPE_STRING, ['null' => false])
            ->addColumn(self::COLUMN_LATITUDE, PostgresAdapter::PHINX_TYPE_DOUBLE, ['null' => false])
            ->addColumn(self::COLUMN_LONGITUDE, PostgresAdapter::PHINX_TYPE_DOUBLE, ['null' => false])
            ->addColumn(self::COLUMN_BEDROOMS, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addColumn(self::COLUMN_BATHROOMS, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addColumn(self::COLUMN_LIST_PRICE, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addColumn(self::COLUMN_YEAR_BUILT, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addColumn(self::COLUMN_SQ_FT, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addColumn(self::COLUMN_PARKING_SPACES, PostgresAdapter::PHINX_TYPE_INTEGER, ['null' => false])
            ->addIndex([self::COLUMN_LIST_PRICE])
            ->addIndex([self::COLUMN_BEDROOMS, self::COLUMN_BATHROOMS])
            ->create();
    }
}
