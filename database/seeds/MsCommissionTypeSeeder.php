<?php

use App\MsCommissionType;
use Illuminate\Database\Seeder;

class MsCommissionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new MsCommissionType;
        $table->commission_type_id = '1';
        $table->commission_type_name = 'Vector Art';
        $table->commission_type_description = 'Vector Art merupakan gambar yang terbentuk dari sejumlah garis dan kurva. ';
        $table->save();

        $table = new MsCommissionType;
        $table->commission_type_id = '2';
        $table->commission_type_name = 'WPAP';
        $table->commission_type_description = 'Wedha"s pop Art Potrait adalah suatu gugus seni ilustrasi potret wajah yang bersaling-silang secara geometri dengan penggunaan kontradiksi warna-warna khusus.';
        $table->save();

        $table = new MsCommissionType;
        $table->commission_type_id = '3';
        $table->commission_type_name = 'Line Art';
        $table->commission_type_description = 'Line Art merupakan gambar yang dibentuk dari garis-garis tegas dan biasanya berwarna hitam tanpa adanya gradasi warna.';
        $table->save();
        
        $table = new MsCommissionType;
        $table->commission_type_id = '4';
        $table->commission_type_name = 'Low Poly Art';
        $table->commission_type_description = 'Low Poly Art atau low polygon art adalah salah satu jenis seni digital yang memiliki efek visual seperti rangkaian kristal yang menyatu menjadi sebuah objek.';
        $table->save();
        

        $table = new MsCommissionType;
        $table->commission_type_id = '5';
        $table->commission_type_name = 'Flat Design';
        $table->commission_type_description = 'Flat Design adalah desain dengan pendekatan minimalis yang menekankan kegunaan, bayangan, tekstur, berfokus pada warna-warna cerah dan ilustrasi dua dimensi.';
        $table->save();
        
        $table = new MsCommissionType;
        $table->commission_type_id = '6';
        $table->commission_type_name = 'Karikatur';
        $table->commission_type_description='Karikatur adalah gambar atau penggambaran suatu objek konkret dengan cara melebih-lebihkan ciri khas objek tersebut.';
        
        $table->save();
    }
}
