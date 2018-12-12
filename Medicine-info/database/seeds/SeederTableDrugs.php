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
            array('Id'=>'1','Name'=>'Amoxsan','ImageUrl'=>'1.jpg','Desc'=>'Amoxsan merupakan obat antibiotika yang digunakan untuk mengatasi infeksi pada saluran pernafasan atas, infeksi saluran kemih, saluran cerna, kulit dan jaringan lunak serta demam tifoid pada anak.','Brand'=>'Amoxsan(caprifarmindo labs)','Type'=>'Antibiotika','AvgPrice'=>'Rp 4.372,- / Tablet','General'=>'Amoxsan merupakan obat antibiotika yang digunakan untuk mengatasi infeksi pada saluran pernafasan atas, infeksi saluran kemih, saluran cerna, kulit dan jaringan lunak serta demam tifoid pada anak. Amoxsan mengandung Amoksisilin (antibiotik golongan beta-laktam) yaitu obat golongan penisilin yang bersifat bakteriolitik bekerja dengan cara menghambat sintesis dinding sel bakteri dengan memutus rantai polimer peptidoglikan sehingga tidak terbentuk.','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'2','Name'=>'Supramox','ImageUrl'=>'2.jpg','Desc'=>'supramox dapat digunakan untuk mengatasi infeksi yang disebakan oleh bakteri/mikroorganisme pada bagian pernafasan dan saluran kemih.','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>' supramox dapat digunakan untuk mengatasi infeksi yang disebakan oleh bakteri/mikroorganisme pada bagian pernafasan dan saluran kemih. Bakteri atau mikroorganisme yang f terdapat pada bagian pencernaan dan saluran kemih yang dapat menyebabkan infeksi, sensitif terhadapa Amoxicillin  ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'3','Name'=>'Lapimox forte','ImageUrl'=>'3.png','Desc'=>'Lapimox mengandung zat aktif amoksisilin yang termasuk dalam golongan antibiotik spektrum luas, sehingga mampu membunuh bakteri gram + maupun -.','Brand'=>'Lapimox forte(LAPI)','Type'=>'Antibiotika','AvgPrice'=>'Rp 46.195,- / Botol','General'=>'Lapimox mengandung zat aktif amoksisilin yang termasuk dalam golongan antibiotik spektrum luas, sehingga mampu membunuh bakteri gram + maupun -. Amoksisilin diserap dengan baik dan cepat pada saluran pencernaan, oleh karena itu pemberian Lapimox bersamaan dengan makan agar dapat mengurangi rasa tidak nyaman di GI juga. Karena obat ini termasuk dalam golongan antibiotik, maka penggunaannya harus sesuai dengan resep dokter dan tidak boleh dihentikan sembarangan karena dapat menyebabkan terjadinya resistensi bakteri ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'4','Name'=>'Amoxicillin','ImageUrl'=>'4.jpg','Desc'=>'Amoxicillin Indo Farma merupakan obat antibiotika yang digunakan untuk mengatasi infeksi pada saluran pernafasan atas, infeksi saluran kemih, saluran cerna, kulit dan jaringan lunak  ','Brand'=>'Amoxicillin(indofarma)','Type'=>'Antibiotika','AvgPrice'=>'Rp 512,- / Tablet','General'=>'Amoxicillin Indo Farma merupakan obat antibiotika yang digunakan untuk mengatasi infeksi pada saluran pernafasan atas, infeksi saluran kemih, saluran cerna, kulit dan jaringan lunak. Amoksisilin (antibiotik golongan beta-laktam) adalah obat golongan penisilin yang bersifat bakteriolitik bekerja dengan cara menghambat sintesis dinding sel bakteri dengan memutus rantai polimer peptidoglikan sehingga tidak terbentuk','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'5','Name'=>'Sanpicillin','ImageUrl'=>'5.jpeg','Desc'=>'Sanpicillin mengandung Ampisilin trihidrat 500 mg, yang merupakan antibiotik golongan beta laktam, temasuk dalam keluarga penisilin dengan spektrum luas penghambatan bakteri.','Brand'=>'Sanpicillin(SANBE FARMA)','Type'=>'Antibiotika','AvgPrice'=>'Rp 2.282,- / Tablet','General'=>' Sanpicillin mengandung Ampisilin trihidrat 500 mg, yang merupakan antibiotik golongan beta laktam, temasuk dalam keluarga penisilin dengan spektrum luas penghambatan bakteri. Mekanisme kerja Sanpicillin yaitu dengan mengganggu proses pembentukan dinding sel bakteri, sehingga akan mengakibatkan kematian bakteri. Sanpicillin digunakan untuk mengobati infeksi saluran kemih, saluran nafas, saluran cerna, saluran empedu disebabkan bakteri gram positif dan negatif. Penggunaan Sanpicillin pada penderita gagal ginjal perlu diperhatikan dan dosis yang diberikan perlu disesuaikan, karena jangka panjang penggunaan Sanpisilin dapat menyebabkan nefrotoksisitas dan perubahan fungsi ginjal. Sanpicillin diproduksi oleh Sanbe Farma.  ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'6','Name'=>'Ampi','ImageUrl'=>'6.jpg','Desc'=>' Ampi dengan komposisi ampicillin merupakan antibiotik yang digunakan untuk mengobati infeksi yang disebabkan oleh bakteri yang peka seperti infeksi saluran nafas (otitis media akut, faringitis, sinusitis), endocarditis, meningitis, gonorrhoea, infeksi kulit dan jaringan lunak, Infeksi saluran kemih, infeksi Salmonella dan shigela ','Brand'=>'Ampi(Interbat)','Type'=>'Antibiotika','AvgPrice'=>'Rp 503,- / Tablet','General'=>'Ampi dengan komposisi ampicillin merupakan antibiotik yang digunakan untuk mengobati infeksi yang disebabkan oleh bakteri yang peka seperti infeksi saluran nafas (otitis media akut, faringitis, sinusitis), endocarditis, meningitis, gonorrhoea, infeksi kulit dan jaringan lunak, Infeksi saluran kemih, infeksi Salmonella dan shigela','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'7','Name'=>'Zibramax','ImageUrl'=>'7.jpg','Desc'=>'Zibramax 500mg diindikasikan untuk infeksi saluran nafas bagian atas dan bawah, kulit dan jaringan lunak, uretritis non gonokokal dan servisitis yang diakibatkan oleh Chlamydia trachomatis. ','Brand'=>'Zibramax(PT.Guardian Pharmatama.)','Type'=>'Antibiotika','AvgPrice'=>'Rp 50.395,- / Tablet','General'=>'  Zibramax 500mg diindikasikan untuk infeksi saluran nafas bagian atas dan bawah, kulit dan jaringan lunak, uretritis non gonokokal dan servisitis yang diakibatkan oleh Chlamydia trachomatis. ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'8','Name'=>'Ancla','ImageUrl'=>'8.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'9','Name'=>'Clanexi forte','ImageUrl'=>'9.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'10','Name'=>'Erysanbe','ImageUrl'=>'10.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'11','Name'=>'Opithrocyn','ImageUrl'=>'11.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'12','Name'=>'Sanprima','ImageUrl'=>'12.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'13','Name'=>'Sanmol','ImageUrl'=>'13.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'14','Name'=>'Naprex','ImageUrl'=>'14.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'15','Name'=>'Praxion','ImageUrl'=>'15.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'16','Name'=>'Propyretic','ImageUrl'=>'16.jpeg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'17','Name'=>'Bufect','ImageUrl'=>'17.png','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'18','Name'=>'Proris','ImageUrl'=>'18.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'19','Name'=>'Alco','ImageUrl'=>'19.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'20','Name'=>'Alerfed, 60mL','ImageUrl'=>'20.jpg','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            array('Id'=>'21','Name'=>'Lapifed expectorant,60mL','ImageUrl'=>'21.png','Desc'=>'  ','Brand'=>'Supramox(Meprofarm)','Type'=>'Antibiotika','AvgPrice'=>'Rp 29.397,- / Botol','General'=>'   ','created_at'=>DB::raw('NOW()')),
         
            



        );
 
         //MASUKKAN DATA KE DATABASE
         DB::table('drugs')->insert($arrdrugs);
    }
}
