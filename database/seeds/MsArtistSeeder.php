<?php


use App\MsArtist;
use Illuminate\Database\Seeder;

class MsArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MsArtist::class, 10)->create();
    }
}
