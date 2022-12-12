<!-- Emirssyah Putra - 120140169 -->
<!-- Praktikum PemWeb RB - Prak 6 -->

<?php
function konversiromawi($angka)
{
	 $angka = intval($angka);
	 $result = '';
	 
	 $array = array('M' => 1000,
	 'CM' => 900,
	 'D' => 500,
	 'CD' => 400,
	 'C' => 100,
	 'XC' => 90,
	 'L' => 50,
	 'XL' => 40,
	 'X' => 10,
	 'IX' => 9,
	 'V' => 5,
	 'IV' => 4,
	 'I' => 1);
	 
	 foreach($array as $roman => $value){
	  $matches = intval($angka/$value);
	 
	  $result .= str_repeat($roman,$matches);
	 
	  $angka = $angka % $value;
	 }
	 
	 return $result;
}

?>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="description" content="Prak 6, Emirssyah Putra" />
        <meta name="keywords" content="Prak 6, Emirssyah, Putra, Emirssyah Putra" />
        <title>Prak 6 - Emirssyah Putra</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
<div class="box">
	<h1>Konversi Romawi</h1>
<form action="#" method="POST">
Angka : <input type="number" name="angka">
<button type="submit">Konversi</button>
</form>

Hasil Konversi Romawi : <?php error_reporting(0);
echo konversiromawi($_POST["angka"]); ?><br>
</div>
</center>
</body>
</html>

