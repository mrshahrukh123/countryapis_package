<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class StatesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/states.csv';
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
