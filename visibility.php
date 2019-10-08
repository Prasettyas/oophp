<?php 
//class #9 -
	class Produk {
		public $judul,
			   $penulis ,
			   $penerbit;
		protected $diskon =0;
		private $harga;
		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		
		}
		//Visibility
		public function getHarga(){
				return $this->harga - ($this->harga * $this->diskon /100);
			}

			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
		//method
		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";	
			return $str;
		}
	}

//kelas baru
	//kelas komik
	class Komik extends Produk{
		public $jumHalaman;
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0,  $jumHalaman = 0){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jumHalaman = $jumHalaman;
		}

		public function getInfoProduk(){
			//overriding
			$str = "Komik :". parent::getInfoProduk() ."- {$this->jumHalaman} Halaman.";
			return $str;	
		}
	}
	//kelas Game
	class Game extends Produk{
			public $waktuMain;
			public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0,  $waktuMain = 0){
				parent:: __construct($judul, $penulis, $penerbit, $harga);
				$this->waktuMain=$waktuMain;
			}
			//Visibility
			public function setDiskon($diskon){
				$this->diskon = $diskon;
			}
			public function getInfoProduk(){
				//overriding
			$str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
			return $str;
		}
	}
	//kelas cetakInfoProduk
	class CetakInfoProduk{
		public function cetak( Produk $produk){
			$str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}
//instansiasi object
	$produk1 = new Komik("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100);
	$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000,50);
	

	//Menampilakan data
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();
	echo "<hr>";
	
	$produk2->setDiskon(50);
	echo $produk2->getHarga();
	

 ?>