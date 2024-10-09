<?php

//Ahora vamos a hacer lo mismo pero con inicio y fin

if(isset($_GET['valor'])&&isset($_GET['valor2'])&&!empty($_GET['valor'])&&!empty($_GET['valor2'])){

    $valorInicio=$_GET['valor'];
    $valorFinal=$_GET['valor2'];

    for($valorInicio;$valorInicio<=$valorFinal;$valorInicio=$valorInicio+2){

        echo "$valorInicio </br>";

    }

}else{
    for($valor=0;$valor<=50;$valor=$valor+2){
        echo "$valor  </br>";
    }
}

?>