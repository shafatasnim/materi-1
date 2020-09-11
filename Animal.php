<?php

class Hewan {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

class Kucing {
	function bersuara(){
		return $this->suara;
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>";
$momo->bisa_terbang = "Tidak Bisa Terbang";
echo $momo->bisa_terbang."<br>";
$momo->suara = "Meooong";
echo "Suaranya : ".$momo->bersuara()."<br>";

echo "<hr>";

class Anjing {
	function bersuara(){
		return $this->suara;
	}
}

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki."<br>";
$doggo->bisa_terbang = "Tidak Bisa Terbang";
echo $doggo->bisa_terbang."<br>";
$doggo->suara = "Guk Guk";
echo "Suaranya : ".$doggo->bersuara();

echo "<hr>";

class  Elang{
	function bersuara(){
		return $this->suara;
	}
}

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki."<br>";
$zya->bisa_terbang = "Bisa Terbang";
echo $zya->bisa_terbang."<br>";
$zya->suara = "Miiiip";
echo "Suaranya : ".$zya->bersuara();

echo "<hr>";

class  Angsa{
	function bersuara(){
		return $this->suara;
	}
}

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki."<br>";
$masha->bisa_terbang = "Bisa Terbang";
echo $masha->bisa_terbang."<br>";
$masha->suara = "Kwaaak";
echo "Suaranya : ".$masha->bersuara();

echo "<hr>";
