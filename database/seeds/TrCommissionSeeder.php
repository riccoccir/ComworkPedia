<?php

use App\TrCommission;
use Illuminate\Database\Seeder;

class TrCommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TrCommission::class, 10)->create();
    }
}
