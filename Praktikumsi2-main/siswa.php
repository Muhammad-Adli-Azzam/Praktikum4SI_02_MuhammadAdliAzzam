<?php

class Siswa{

    public $nama;
    public $nisn;
    public $gender;

    public function set_nama($nama){
      
    $this->nama = $nama;  
   }

   function get_nama(){
       return $this->nama;
   }

   function set_nisn($nisn){
       $this->nisn = $nisn;
   }
   function get_nisn(){
       return $this->nisn;
   }

    function hadir(){
        return "siswa ini hadir di kelas";
    }

    function nilaisiswa($nilai_uts,$nilai_uas,$nilai_tugas){
         
        return ($nilai_uts + $nilai_uas+ $nilai_tugas)/3;
    }


}

$siswa1 = new Siswa();
$siswa1->set_nama("M ADLI AZZAM");
$siswa1->set_nisn("o110120131");
echo "Nama Siswa :".$siswa1->get_nama();
echo "<br>";
echo "NISN Siswa: ".$siswa1->get_nisn();
echo "<br>";
echo "Nilai Akhir Siswa : ".$siswa1->nilaisiswa(75,88,95);

echo "<br>";

echo "<br>";

$siswa2 = new Siswa();
$siswa2->set_nama("M NUR RIZQI S");
$siswa2->set_nisn("01928191202");
echo "Nama Siswa :".$siswa2->get_nama();
echo "<br>";
echo "NISN Siswa : ".$siswa2->get_nisn();
echo "<br>";
echo "Nilai Akhir Siswa : ".$siswa2->nilaisiswa(85,85,90);

echo "<br>";

echo "<br>";

$siswa3 = new Siswa();
$siswa3->set_nama("REYHANSYAH");
$siswa3->set_nisn("011023411");
echo "nama siswa :".$siswa3->get_nama();
echo "<br>";
echo "nisn siswa : ".$siswa3->get_nisn();
echo "<br>";
echo "Nilai akhir siswa : ".$siswa3->nilaisiswa(70,85,90);

echo "<br>";

echo "<br>";

$siswa4 = new Siswa();
$siswa4->set_nama("ARIF");
$siswa4->set_nisn("011023411");
echo "nama siswa :".$siswa4->get_nama();
echo "<br>";
echo "nisn siswa : ".$siswa4->get_nisn();
echo "<br>";
echo "Nilai akhir siswa : ".$siswa4->nilaisiswa(88,80,85);






?>