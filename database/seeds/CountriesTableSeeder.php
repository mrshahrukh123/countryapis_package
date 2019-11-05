<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class CountriesTableSeeder extends CsvSeeder
{

	public function __construct()
    {
        $this->file = '/database/seeds/csvs/countries.csv';
        $this->delimiter = ',';
        $this->tablename = 'countries';
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
