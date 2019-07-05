function cek() { // mendeklarasikan fungsi cek untuk mengecek data apakah kosong atau tidak
	var nama = document.pesan.nama.value;  //line 2 sampai 9 menampung data yang ingin di cek  di masing-masing variabel
	var alamat = document.pesan.alamat.value;
	var nohp = document.pesan.nohp.value;
	var email = document.pesan.email.value;
	var merk = document.pesan.merk.value;
	var harga = document.pesan.harga.value;
	var jumlah = document.pesan.jumlah.value;
	var total = document.pesan.total.value;

	//kondisi jika data yang di minta kosong (tidak ada isinya) maka akan memunculkan pesan data harus di isi lengkap
	if(nama == "" || alamat=="" || nohp=="" || email=="" || merk=="" || harga=="" || jumlah=="" || total==""){
		 alert("data harus di isi lengakp");	
	}
}