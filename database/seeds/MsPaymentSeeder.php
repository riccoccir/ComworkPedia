<?php

use App\MsPayment;
use Illuminate\Database\Seeder;

class MsPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $table = new MsPayment;
        $table->payment_type_name = 'ovo';
        $table->save();

        $table = new MsPayment;
        $table->payment_type_name = 'gopay';
        $table->save();

        $table = new MsPayment;
        $table->payment_type_name = 'bank';
        $table->save();


    }
}
