<?php
namespace Tdev\CSCAPI\Database\seeds;

use JeroenZwart\CsvSeeder\CsvSeeder;
use DB;

class CitiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/packages/tdevelopers/cscapi/src/Database/seeds/csvs/cities.csv';
        $this->delimiter = ',';
        $this->tablename = 'cities';
        $this->timestamps = true;
        $this->truncate = false;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
	    parent::run();
    }
}
