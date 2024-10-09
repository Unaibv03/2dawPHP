<?php

$array=[];

for($i=0;$i<50;$i++){

    $array[$i]=rand(0,99);

}

echo "<ul>";

    for($i=0;$i<count($array);$i++){
        echo "<li>";
        print($array[$i]);
        echo "</li>";

    }

  echo "</ul>";

?>