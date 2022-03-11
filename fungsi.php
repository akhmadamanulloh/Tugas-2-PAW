<!DOCTYPE html>
<html> 
<head>
    <title>Nomer 3</title>
</head>
<body>
	<?php
	//pembuatan fungsi
	function perkalian($angka1, $angka2)
	{
	   $a= $angka1;
	   $b= $angka2;
	   $hasil= $a*$b;
	   return $hasil;
	}
	 
	//pemanggilan fungsi
	$hasil=perkalian(5,5);
	echo "Hasil Perkalian 5 x 5 adalah $hasil"."<br />";
	echo "Hasil perkalian 7 x 2 adalah ".perkalian(7,2)."<br />";
	echo "Hasil perkalian 7 x 7 adalah ".perkalian(7,7)."<br />";
	?>
</body>
</html> 