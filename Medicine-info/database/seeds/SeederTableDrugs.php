<?php

use Illuminate\Database\Seeder;

class SeederTableDrugs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //KOSONGKAN TABEL SISWA
         DB::table('drugs')->delete();
         //BUAT DATA BERUPA ARRAY
         $arrdrugs = array(
            array('Id'=>'5','Name'=>'Obat3','ImageUrl'=>'medicine-11111.jpg','Desc'=>'Deskripsi2','Brand'=>'Brand','Type'=>'type','AvgPrice'=>'3232','General'=>'general','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'6','Name'=>'Obat6','ImageUrl'=>'www.gambar1.jpg.com','Desc'=>'Deskripsi2','Brand'=>'Brand','Type'=>'type','AvgPrice'=>'3232','General'=>'general','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'7','Name'=>'Obat7','ImageUrl'=>'www.gambar1.jpg.com','Desc'=>'Deskripsi2','Brand'=>'Brand','Type'=>'type','AvgPrice'=>'3232','General'=>'general','created_at'=>DB::raw('NOW()')),
         
        );
 
         //MASUKKAN DATA KE DATABASE
         DB::table('drugs')->insert($arrdrugs);
    }
}
