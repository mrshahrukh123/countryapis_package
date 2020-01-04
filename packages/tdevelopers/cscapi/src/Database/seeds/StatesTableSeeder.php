<?php
namespace Tdev\CSCAPI\Database\seeds;

use JeroenZwart\CsvSeeder\CsvSeeder;
use DB;

class StatesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/packages/tdevelopers/cscapi/src/Database/seeds/csvs/states.csv';
        $this->delimiter = ',';
        $this->tablename = 'states';
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
