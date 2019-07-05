function pencarian() { /* mendeklarasikan nama fungsinya yaitu pencarian*/
	var kata = document.formpencarian.key.value;  /* variabel kata menampung data dari formperncarian berupa key (tulisan yang kita ketik untuk di search)*/
	var hasil = "http://www.google.com/search?q=" + kata ; /* variabel hasil menampung data untuk dicari yang dilakukan oleh www.google.com dengan kata kunci (key yang tadi di ketikan)*/
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') 
}/* windows open untuk membuka jendela baru hasil dari serching yang dilakukan*/