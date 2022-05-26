Membuat kalkulator menggunakan bahasa pemograman PHP dan web server XAMPP

Untuk membuatnya memerlukan software :

1.PHP
2.XAMPP


Langkah-langkah Membuat program Kalkulator :

1.Membuat file kalkulator.php
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
 Operator :<select class="option" name="pilih">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
 </select>
 <br>
Bilangan Kedua : <input type="text" name="bilangan2" class="tombol">
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


2.Membuat file style.css

body{
	background: #F2F2F2;
	font-family: sans-serif;
}

.kalkulator{
	width: 335px;
	background: ;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}
 
.judul{
	text-align: center;
	color: #eee;
    font-weight: normal;
}

.tombol{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 20px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}

.option{
	font-size: 16pt;
	border: none;
	width: 215px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}

.bil{ 
	width: 300px; 
	margin: 5px; 
	border: none; 
	font-size: 16pt; 
	border-radius: 5px; 
	padding: 10px; 


}

Struktur folder di dalam folder Tugas6_AL EKSAN DITYA PRASETYA :

--kalkulator.php
--style.css


Test di Browser :

Buka browser anda pada alamat http://localhost:8080/Tugas6_ALEKSANDITYAPRASETYA/kalkulator.php
