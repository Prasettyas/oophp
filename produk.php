<?php 

	class Produk {
		public $judul = "judul",
			   $penulis = "penulis",
			   $penerbit = "penerbit",
			   $harga = 0;

			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}
//instansiasi object
	$produk3 = new Produk();
	$produk3->judul ="Naruto";
	$produk3->penulis =" Masaashi Kishimoto";
	$produk3->penerbit = "Shonen Jump";
	$produk3->harga = 30000;

	echo "Komik : $produk3->penulis, $produk3->penerbit ";
	echo "<br>";

	$produk4 = new Produk();
	$produk4->judul ="Uncharted";
	$produk4->penulis ="Neil Druckmann";
	$produk4->penerbit = "Sony Computer";
	$produk4->harga = 20000;

	echo "Komik : ". $produk3->getLabel();
	echo "<br>";
	echo "Game : ". $produk4->getLabel();

 ?>