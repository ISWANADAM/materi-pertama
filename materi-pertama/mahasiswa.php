<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    //constructor
    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    //method
    public function sayHello() {
        return "Hallo, nama is". $this->nama . " dengan NIM". $this->nim . " saya adalah jurusan / prodi". $this->prodi . " program.";

    }
    
}

//object

$mahasiswa1 = new Mahasiswa('T3124001', 'Andi', 'Teknik informatika');

$mahasiswa2 = new Mahasiswa('T3124002', 'Budi', 'Sistem Informasi');

$mahasiswa3 = new Mahasiswa('T3124003', 'Cici', 'Sistem Informasi');

echo "DAftar Mahasiswa <br>";
echo"-----------------------------<br>";
echo $mahasiswa1->sayHello().'<br>';
echo $mahasiswa2->sayHello().'<br>';
echo $mahasiswa3->sayHello().'<br>';