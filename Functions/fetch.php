<table class="table table-hover table-dark">
    <thead>
<tr class="tabelka2">
    <th>
        ID
    </th>
    <th>
        ID samochodu
    </th>
    <th>
        Marka
    </th>
    <th>
        Model
    </th>
    <th>
        skrzynia
    </th>
    <th>
        kolor
    </th>
    <th>
        Edytuj
    </th>
    <th>
        usuń
    </th>
</tr>

<?php
require_once('polacz.php');
$sql="SELECT * FROM samochody";
$result=mysqli_query($baza ,$sql);
$ctn=1;
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?= $ctn?></td>   
    <td><?= $row['ID']?></td>
    <td><?= $row['mark']?></td>
    <td><?= $row['model']?></td>
    <td><?= $row['skrzynia']?></td>
    <td><?= $row['kolor']?></td>
    <td><a href="Functions/update.php?ID=<?= $row['ID']?>&mark=<?= $row['mark']?>&model=<?= $row['model']?>&skrzynia=<?= $row['skrzynia']?>&kolor=<?= $row['kolor']?>"><button  class="">edytuj</button></a></td>
    <td><a href="Functions/delete.php?ID=<?= $row['ID']?>"><button class="">usuń</button></a></td>
</tr>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="GET" action="Functions/process.php">
		ID:<br>
		<input type="int" name="ID">
		<br>
		model:<br>
		<input type="text" name="model">
		<br>
		mark:<br>
		<input type="text" name="mark">
		<br>
		Skrzynia:<br>
		<input type="text" name="skrzynia">
        <br>
		Kolor:<br>
		<input type="text" name="kolor">
        <br>
		<input type="submit" name="save" value="submit">
	</form>
  </div>

</div>
<?php
$ctn++;
};
}
else{
?>
<TD colspan="7">
    <?= 'brak danych'?>
</TD>

<?php
}
mysqli_close($baza);
?>
</thead>
</table>
<button id="myBtn">dodaj</button>
<a href="http://localhost/samochody/Functions/rejestracja.php">Rejestracja</a>
