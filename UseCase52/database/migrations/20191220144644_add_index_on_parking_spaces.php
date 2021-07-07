<?php

use Phinx\Migration\AbstractMigration;

class AddIndexOnParkingSpaces extends AbstractMigration
{
    public function change()
    {
        $this->table('listings')->addIndex(['parking_spaces'])->update();
    }
}
