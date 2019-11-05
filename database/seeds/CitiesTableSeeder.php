<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class CitiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/cities.csv';
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
