<?php

use App\MsClient;
use Illuminate\Database\Seeder;

class MsClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MsClient::class, 10)->create();
    }
}
