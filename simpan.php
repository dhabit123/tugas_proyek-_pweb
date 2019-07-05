<?php
	/* untu mengecek apakan variabel bernilai null atau tidak*/
	if( isset($_POST["nama"]) &&isset($_POST["alamat"]) &&isset($_POST["nohp"]) &&isset($_POST["email"]) && isset($_POST["merk"]) && isset($_POST["harga_jual"]) && isset($_POST["jumlah"]) && isset($_POST["total"])){

		$tgl=date("l,j F Y");     		   //untuk membuat tanggal otomatis tanpa harus input manual
		$nama=$_POST["nama"];       	   //untuk isi dari variabel nama
		$alamat=$_POST["alamat"];    	   //menampung isi variabel alamat
		$nohp=$_POST["nohp"];              //menampung isi variabel no hp
		$email=$_POST["email"];            //menampung isi variabel email
		$merk=$_POST["merk"];              //menampung isi variabel merk
		$harga_jual=$_POST["harga_jual"];  //menampung isi variabel harga jual
		$jumlah=$_POST["jumlah"];          //menampung isi variabel jumlah
		$total=$_POST["total"];            //menampung isi variabel total
	}

	$file = fopen("data_transaksi.txt", "a") or die("Tidak bisa membuka file!"); // untuk membuka file data_transaksi.txt kalau belum ada maka akan membuat data txt yang baru
		// line 17 sampai 27 variabel data 1 sampai 11 menampung string yang nantinya akan di cetak di data_transaksi.tst
		$data1 = "Data Pemesan SmartPhone \n\n";
		$data2 = "Tanggal Pesan  : ".$tgl."\n";
		$data3 = "Nama           : ".$nama." \n";
		$data4 = "Alamat         : ".$alamat."\n";
		$data5 = "No. Hp         : ".$nohp."\n";
		$data6 = "E-Mail         : ".$email."\n";
		$data7 = "Merk Hp        : ".$merk."\n";
		$data8 = "Harga          : ".$harga_jual." \n";
		$data9 = "Jumlah         : ".$jumlah." \n";
		$data10 = "Total          : ".$total." \n\n";
		$data11 = "----------------------------------\n\n";

		//line 31 sampai 41 untuk menuliskan string isi dari variabel diatas kedalam data_transaksi.txt
		fwrite($file, $data1);
		fwrite($file, $data2);
		fwrite($file, $data3);
		fwrite($file, $data4);
		fwrite($file, $data5);
		fwrite($file, $data6);
		fwrite($file, $data7);
		fwrite($file, $data8);
		fwrite($file, $data9);
		fwrite($file, $data10);
		fwrite($file, $data11);
	fclose($file); //utnuk menutup file data_transaksi, batas dari menulisan
	
	echo "Terima Kasih Sudah Membeli Di Situs Kami \n"; //menampilkan string tersebut di laman web
?>