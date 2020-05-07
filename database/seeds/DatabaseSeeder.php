<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MsClientSeeder::class);
        $this->call(MsArtistSeeder::class);
        $this->call(MsCommissionTypeSeeder::class);
        $this->call(MsPaymentSeeder::class);
        $this->call(TrCommissionSeeder::class);
        $this->call(HeaderHireTransactionSeeder::class);
        $this->call(DetailHireSeeder::class);
    }
}
