<?php

use App\DetailHire;
use Illuminate\Database\Seeder;

class DetailHireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new DetailHire;
        $table->hire_id = 1;
        $table->artist_id = 10;
        $table->commission_id = 3;
        $table->save();

        $table = new DetailHire;
        $table->hire_id = 2;
        $table->artist_id = 5;
        $table->commission_id = 8;
        $table->save();
        
        $table = new DetailHire;
        $table->hire_id = 3;
        $table->artist_id = 2;
        $table->commission_id = 6;
        $table->save();
    }
}
