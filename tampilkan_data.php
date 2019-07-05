<?php
	// fopen untuk membuka file data_transaksi.txt jika data tidak bisa di buka maka akan muncul "tidak bisa membuka file" di laman web
	$file = fopen("data_transaksi.txt", "r") or die("Tidak bisa membuka file!");
	while (!feof($file)) {          //perulangan jika data belum sampai akhrir maka akan teris di baca lalu di tampilkan di laman web perbaris karena pakai fgets dan setiap bari akar di enter karena ada <br>
		echo fgets($file)."<br>";
	}
	//untuk menutup kembali file data_transaksi.txt, batas proses pembacaan file txt
	fclose($file);

	
	?>