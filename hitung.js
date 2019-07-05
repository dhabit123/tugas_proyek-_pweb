function hitung(){ //mendeklarasikan fungsi bernama hitung
	hrg=document.getElementById("harga_jual").value; //mengambil nilai harga jual disimpan di hrg
	jml=document.getElementById("jumlah").value;  //untuk mengambil nilai jumlah disimpan di jml

	total=hrg*jml; // menghitung total bayar

	document.getElementById("total").value=total; // sebagai nilai kembalian yang disimpan di variabel total
}