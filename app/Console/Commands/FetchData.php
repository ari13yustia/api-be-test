<?php

namespace App\Console\Commands;

use Database\Seeders\CitySeeder;
use Database\Seeders\ProvinceSeeder;
use Illuminate\Console\Command;

class FetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:fetch_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetching data from rajaongkir and add to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
    }
}
