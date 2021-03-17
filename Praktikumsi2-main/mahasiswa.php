<?php

class Mahasiswa{

    public $nama;
    public $nim;
    public $gender;

    public function __construct($nama,$nim,$gender){

        $this->nama = $nama;
        $this->nim = $nim;
        $this->gender = $gender;
        

    }

    public function nama_mahasiswa(){
        return "nama mahasiswa".$this->nama;
    }

}

$mahasiswa1 = new Mahasiswa("Muhammad Adli Azzam","0110120131","Laki Laki");

echo $mahasiswa1->nama;
echo "<br>";
echo "NIM Mahasiswa : ".$mahasiswa1->nim;
echo "<br>";
echo "Jenis kelamin : ". $mahasiswa1->gender;
echo "<br>";
echo "Nama Mahasiswa : ".$mahasiswa1->nama;
echo"<br>";

echo"<br>";

echo"<br>";
echo"<br>";

$mahasiswa2 = new Mahasiswa("Alfina Rizki Zarkasih Putri","0110123432","Perempuan");
echo $mahasiswa2->nama;
echo "<br>";
echo "NIM mahasiswa : ".$mahasiswa2->nim;
echo "<br>";
echo "Jenis Kelamin : ".$mahasiswa2->gender;
echo "<br>";
echo "Nama Mahasiswa : ".$mahasiswa2->nama;
echo "<br>";


?>