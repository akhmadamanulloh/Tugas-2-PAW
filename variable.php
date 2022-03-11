<!DOCTYPE html>
<html> 
<head>
    <title>Nomer 2</title>
</head>
<body>
	<?php
		$a = 10; echo "a=10<br>";
		$b = 5; echo "b=5<br>";
		$c = 3; echo "c=3<br>";
		$d = 7; echo "d=7<br>";
		
		echo "<br/> PENJUMLAHAN <br/>";
		$hasil = $a+$b+$c; 
		echo "a+b+c= $hasil"."<br/>";  //tercetak 18
		$hasil= $c+$d;
		echo "c+d= $hasil"."<br/>";  //tercetak 10
		$hasil= $b+$c+$d; 
		echo "b+c+d= $hasil"."<br/>";   //tercetak 15
		
		echo "<br/> PENGURANGAN <br/>";
		$hasil= $a-$b-$c;
		echo "a-b-c= $hasil"."<br/>"; //tercetak 2
		$hasil= $d-$c; 
		echo "d-c= $hasil"."<br/>";  //tercetak 4
		$hasil= $a-$d; 
		echo "a-d= $hasil"."<br/>";   //tercetak 3
	 
		echo "<br/> PERKALIAN <br/>";
		$hasil= $a*$b*$c;
		echo "a*b*c= $hasil"."<br/>";  //tercetak 150
		$hasil= $a*$b; 
		echo "a*b= $hasil"."<br/>";    //tercetak 50
		$hasil= $b*$c*$d; 
		echo "b*c*d= $hasil"."<br/>";   //tercetak 105
	 
		echo "<br/> PEMBAGIAN <br/>";
		$hasil= $a/$b; 
		echo "a:b= $hasil"."<br/>";      //tercetak 2
		$hasil= $a/$b/$c; 
		echo "a:b:c= $hasil"."<br/>";      //tercetak 0.66666666666667
		$hasil= $d/$c; 
		echo "d:c= $hasil"."<br/>";      //tercetak 2.3333333333333
	?>
</body>
</html> 