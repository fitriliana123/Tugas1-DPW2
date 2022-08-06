<?php
include "Animal.php";

class Kucing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "meooong".$this ->suara;
    }
}
$mauza = new Kucing;
$mauza ->jumlah_kaki = 4;
$mauza ->bisa_terbang = "Tidak Bisa Terbang";
echo "Mauza Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$mauza ->jumlah_kaki."<br>";
echo $mauza ->bisa_terbang."<br>";
echo "Suaranya : ".$mauza -> bersuara();

echo "<hr>";

class Anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Guk guk".$this ->suara;
    }
}
$doggi = new Anjing;
$doggi ->jumlah_kaki = 4;
$doggi ->bisa_terbang = "Tidak Bisa Terbang";
echo "Doggi Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggi ->jumlah_kaki."<br>";
echo $doggi ->bisa_terbang."<br>";
echo "Suaranya : ".$doggi -> bersuara();

echo "<hr>";   

class Elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Miiip".$this ->suara;
    }
}
$mory = new Elang;
$mory ->jumlah_kaki = 2;
$mory ->bisa_terbang = "Bisa Terbang";
echo "Mory Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$mory ->jumlah_kaki."<br>";
echo $mory ->bisa_terbang."<br>";
echo "Suaranya : ".$mory -> bersuara();

echo "<hr>";

class Angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Kwaak Kwaak".$this ->suara;
    }
}
$lucky = new Angsa;
$lucky ->jumlah_kaki = 2;
$lucky ->bisa_terbang = "Bisa Terbang";
echo "Lucky Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$lucky ->jumlah_kaki."<br>";
echo $lucky ->bisa_terbang."<br>";
echo "Suaranya : ".$lucky ->bersuara();


