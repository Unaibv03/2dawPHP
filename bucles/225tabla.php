<?php

if(isset($_GET['filas'])&&!empty($_GET['filas'])&&isset($_GET['columnas'])&&!empty('columnas')){

$filas=$_GET['filas'];
$columnas=$_GET['columnas'];


echo "<table>";

for($i=0;$i<$filas;$i++){

    echo "<tr>";

    for($j=0;$j<$columnas;$j++){

        echo "
        <td>
        ($i,$j)
        </td>";

    }

    echo "</tr>";

}

echo "</table>";


}

?>