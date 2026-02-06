<?php
class procduk {
    private $nama;
    private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }
    public function getInfo() {
        return $this->nama . ", Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}
$p1 = new procduk("Laptop", 8500000);
$p2 = new procduk("Mouse", 15000000);

echo $p1->getInfo() . "<br>";
echo $p2->getInfo() . "<br>";