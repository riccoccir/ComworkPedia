<?php


use App\HeaderHireTransaction;
use Illuminate\Database\Seeder;

class HeaderHireTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new HeaderHireTransaction;
        $table->artist_id = 10;
        $table->commission_id = 3;
        $table->client_id = 2;
        $table->payment_id = 1;
        $table->image_from_client = 'http://lorempixel.com/640/480/cats';
        $table->image_from_artist = 'http://lorempixel.com/640/480/dogs';
        $table->transaction_status = 'finished';
        $table->payment_amount = 125000;    
        $table->save();
        
        $table = new HeaderHireTransaction;
        $table->artist_id = 5;
        $table->commission_id = 8;
        $table->client_id = 1;
        $table->payment_id = 3;
        $table->image_from_client = 'http://lorempixel.com/640/480/dogs';
        $table->image_from_artist = 'http://lorempixel.com/640/480/cats';
        $table->transaction_status = 'on progress';
        $table->payment_amount = 75000; 
        $table->save();
            
        $table = new HeaderHireTransaction;
        $table->artist_id = 2;
        $table->commission_id = 6;
        $table->client_id = 3;
        $table->payment_id = 2;
        $table->image_from_client = 'http://lorempixel.com/640/480/cars';
        $table->image_from_artist = 'http://lorempixel.com/640/480/motors';
        $table->transaction_status = 'on progress';
        $table->payment_amount = 100000;
        $table->save();
                
    }
}
