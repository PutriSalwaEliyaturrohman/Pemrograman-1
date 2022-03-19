 <?php

class Handphone {

    public  $merk,
            $ram,
            $sistemoperasi,
            $type,
            $warna,
            $harga;

    public function __construct( $merk = "merk", $ram = "ram", $sistemoperasi = "sistemoperasi", $type = "type", $warna = "warna", $harga = 0) {

        $this->merk = $merk;
        $this->ram = $ram;
        $this->sistemoperasi = $sistemoperasi;
        $this->type = $type;
        $this->warna = $warna;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->ram";

    }

    public function getmerkHandphone() {

        $str = "{$this->type} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class PaketData {

    public  $nama,
            $kategori,
            $jenis,
            $simcard,
            $gb,
            $harga;

    public function __construct( $nama = "nama", $kategori = "kategori", $jenis = "jenis", $simcard = "simcard", $gb = "gb", $harga = 0) {

        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->jenis = $jenis;
        $this->simcard = $simcard;
        $this->gb = $gb;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->simcard, $this->jenis, $this->kategori, $this->gb";

    }

    public function getPaketData() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Android extends Handphone {

    public function getmerkHandphone() {
        $str = "Android : {$this->merk} │ {$this->getlabel()} (Rp. {$this->harga}) - {$this->type} type.";
        return $str; 
    }

}

class iOS extends Handphone {

    public function getmerkHandphone() {
        $str = " iOS : {$this->merk} │ {$this->getlabel()} (Rp. {$this->harga}) - {$this->type} type.";
        return $str; 
    }

}

class InternetKuota extends PaketData {

    public function getPaketData() {
        $str = "PaketData : {$this->simcard} │ {$this->getlabel()} (Rp. {$this->harga})";
        return $str; 
    }

}

class InternetUnlimited extends PaketData {

    public function getPaketData() {
        $str = "PaketData : {$this->simcard} │ {$this->getlabel()} (Rp. {$this->harga})";
        return $str; 
    }

}

class CetakHandphone {

    public function cetak(Handphone $handphone){
        $str = "{$handphone->sistemoperasi} {$handphone->getlabel()} (Rp. {$handphone->harga})";
        return $str;
    }

}

class CetakPaketData {

    public function cetak(PaketData $paketdata){
        $str = "{$paketdata->simcard} {$paketdata->getlabel()} (Rp. {$paketdata->harga})";
        return $str;
    }

}

$handphone1 = new Android("Samsung", "8GB", "Android", "Samsung A51", "Biru", 4000000);
$handphone2 = new Android("OPPO", "6/8GB", "Android", "OPPO A92", "Hitam", 3000000);
$handphone3 = new iOS("iPhone", "3GB", "iOS", "iPhone Xr", "Merah", 5900000);
$handphone4 = new iOS("iPhone", "6GB", "iOS", "iPhone 13 Pro Max", "Emas", 26999000);
$paketdata1 = new InternetKuota("Paket Data", "Kuota", "Chat", "Axis", "500mb", 900);
$paketdata2 = new InternetKuota("Paket Data", "Kouta", "Internet", "XL", "1GB", 15000);
$paketdata3 = new InternetUnlimited("Paket Data", "Unlimitid", "Internet", "ByU", "1Bulan", 150000);
$paketdata4 = new InternetUnlimited("Paket Data", "Unlimitid", "Internet", "ByU", "2GB", 15000);

echo $handphone1->getmerkHandphone();
echo "<br>";
echo $handphone2->getmerkHandphone();
echo "<br>";
echo $handphone3->getmerkHandphone();
echo "<br>";
echo $handphone4->getmerkHandphone();
echo "<hr>";
echo $paketdata1->getPaketData();
echo "<br>";
echo $paketdata2->getPaketData();
echo "<br>";
echo $paketdata3->getPaketData();
echo "<br>";
echo $paketdata4->getPaketData();
echo "<hr>";


?>