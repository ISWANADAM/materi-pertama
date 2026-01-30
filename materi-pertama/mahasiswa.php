<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    //method
    public function sayHello() {
        return "Hallo, nama is". $this->nama . " dengan NIM". $this->nim . " saya adalah jurusan / prodi". $this->prodi . " program.";

    }
    
}

//object

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim = 'T3124001';
$mahasiswa1->nama = 'Andi';
$mahasiswa1->prodi = 'Teknik informatika';

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nim = 'T3124002';
$mahasiswa2->nama = 'Budi';
$mahasiswa2->prodi = 'Sistem Informasi';

echo "DAftar Mahasiswa <br>";
echo"-----------------------------<br>";
echo $mahasiswa1->sayHello().'<br>';
echo $mahasiswa2->sayHello().'<br>';
