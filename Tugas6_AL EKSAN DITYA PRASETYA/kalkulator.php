<!DOCTYPE html>
<html>
<head>
 <title>Membuat program Kalkulator sederhana</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="kalkulator">
  <h2 class ="judul">Kalkulator</h2>
  <form action="" method="POST">
    Bilangan Pertama :<input type="text" name="bilangan1">
 <br> 
 Operator :<select name="pilih">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
 </select>
 <br>
Bilangan Kedua : <input type="text" name="bilangan2">
 <br>
<input type="submit" name="hitung" value="Hitung">
 </form>
</body>
</html>
 
<?php  	
// menggunakan method post untuk penanganan data bilangan yang diinput pada bilangan pertama dan kedua
// fungsi isset untuk memerikasa ketersedian data,jika form disubmit maka data disimpan dalam masing-masing varibel
 if(isset($_POST['hitung'])){
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  $pilih = $_POST['pilih'];

// saya menggunakan else if agar ketika user pilih operasi penjumlahan maka yang keluar hasil penjumlahan dan seterusnya
  if($pilih){
   if($bil1 == "" || $bil2 == ""){
    //  script Alert ini digunakan apabila user tidak mengisi atau sengaja mengosongkan datanya dan akan diberikan respon seperti code dibawah ini
	?> 
	<script>alert("Anda belum mengisi angka bilangan"); </script> 
  <?php
   }
   // Penjumlahan dengan PHP ini menggunakan operator " + " 
   elseif($pilih == '+'){
    $hasil = $bil1 + $bil2;
    echo "Hasil penjumlahan adalah :".$hasil;
   }
   // Pengurangan dengan PHP ini menggunakan operator " - " 
   elseif($pilih == '-'){
    $hasil = $bil1 - $bil2;
    echo "Hasil pengurangan adalah : ".$hasil;
   }
   // Perkalian dengan PHP ini menggunakan operator " * " 
   elseif($pilih == '*'){
    $hasil = $bil1 * $bil2;
    echo "Hasil perkalian adalah : ".$hasil;
   }
   //  Pembagian dengan PHP ini menggunakan operator " / " 
   elseif($pilih == '/'){
    $hasil = $bil1 / $bil2;
    echo "Hasil pembagian adalah : ".$hasil;
   }
  }
 }  

?>