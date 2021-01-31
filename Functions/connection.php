<?php
        include "polacz.php"; //wzór pliku we wpisie "Pełny panel administracyjny MySQLi"
        if ($sql = $baza->prepare( "SELECT DISTINCT * FROM samochody ORDER BY ID "))
        {
                $sql->execute(); //wykonaj SQL
                $sql->bind_result($ID,$mark,$model,$skrzynia,$kolor);
                while ($sql->fetch())
                  $auto[] = array(
                        "ID" => $ID,
                        "mark" => $mark,
                        "model" => $model,
                        "skrzynia" => $skrzynia,
		        "kolor" => $kolor,
                   ); //dla każdego nazwiska tworzy 2 pary, nazwiska przekonwertowane do UTF
                $sql->close();
        }
        $baza->close();
        echo json_encode($auto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>