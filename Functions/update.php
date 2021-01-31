<?php
include_once 'polacz.php';
if(count($_GET)>0) {
mysqli_query($baza,"UPDATE samochody set ID='" . $_GET['ID'] . "', mark='" . $_GET['mark'] . "', model='" . $_GET['model'] . "', kolor='" . $_GET['kolor'] . "' ,skrzynia='" . $_GET['skrzynia'] . "' WHERE ID='" . $_GET['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($baza,"SELECT * FROM samochody WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update samochody Data</title>
</head>
<body>
<form name="frmUser" method="GET" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID: <br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
mark: <br>
<input type="text" name="mark" class="txtField" value="<?php echo $row['mark']; ?>">
<br>
model:<br>
<input type="text" name="model" class="txtField" value="<?php echo $row['model']; ?>">
<br>
kolor:<br>
<input type="text" name="kolor" class="txtField" value="<?php echo $row['kolor']; ?>">
<br>
skrzynia:<br>
<input type="text" name="skrzynia" class="txtField" value="<?php echo $row['skrzynia']; ?>">
<br>

<a href="https://localhost/samochody/index.php"><input type="submit" name="submit" class="button">Powrót</a>

</form>
</body>
</html>