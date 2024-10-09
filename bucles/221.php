<?php


    if(isset($_GET['inicio'])&&isset($_GET['final'])&&!empty($_GET['inicio'])&&!empty($_GET['final'])){

        $inicio=$_GET['inicio'];
        $final=$_GET['final'];

        for($inicio;$inicio<=$final;$inicio++){
            echo "$inicio </br>";
        }

    }
    else{

        for($valor=1;$valor<=10;$valor++){

            echo "$valor </br> ";

        }
    }
?>