<?php
include_once 'polacz.php';
if(isset($_GET['save']))
{	 
     $ID = $_GET['ID'];
	 $mark = $_GET['mark'];
	 $model = $_GET['model'];
	 $kolor = $_GET['kolor'];
     $skrzynia = $_GET['skrzynia'];
	 $sql = "INSERT INTO samochody (ID,mark,model,kolor,skrzynia )
	 VALUES ('$ID','$mark','$model','$kolor','$skrzynia')";
	 if (mysqli_query($baza, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($baza);
	 }
	 mysqli_close($baza);
}
header("Location: https://localhost/samochody/index.php")

?>