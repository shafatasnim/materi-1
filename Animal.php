<?php  

echo "<hr>Animal";

class Animal {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

	function bersuara(){
		return "growwlll";
}

class Kucing extends Animal {
	function bersuara(){ 
		return "Meooong";
	}
}

class Anjing extends Animal {
	function bersuara(){
		return "Guk Guk";
	}
}

class Elang extends Animal {
	function bersuara(){
		return "Miiiip";
	}
}

class Angsa extends Animal {
	function bersuara(){
		return "Kwaaak";
	}
}

echo "<hr>";

$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->bisa_terbang = "Tidak Bisa Terbang";
echo "Momo Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>";\


echo $momo->bisa_terbang."<br>";
echo "Suaranya : ".$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki."<br>";
$doggo->bisa_terbang = "Tidak Bisa Terbang";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya : ".$doggo->bersuara();

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki."<br>";
$zya->bisa_terbang = "Bisa Terbang";
echo $zya->bisa_terbang."<br>";
echo "Suaranya : ".$zya->bersuara();

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki."<br>";
$masha->bisa_terbang = "Bisa Terbang";
echo $masha->bisa_terbang."<br>";
echo "Suaranya : ".$masha->bersuara();

echo "<hr>";