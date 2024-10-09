<?php

if(isset($_GET['pregunta'])&&!empty($_GET['pregunta'])){

    $pregunta=$_GET['pregunta'];

    /*
    $respuestas = [0 => "Si",           <--- Array asociativo
                    1 => "No",
                        2 => "quizás",
                            3 => "claro que sí",
                                4 => "por supuesto que no",
                                    5 => "no lo tengo claro",
                                        6 => "seguro",
                                            7 => "yo diría que si",
                                                8 => "ni de coña"];
    */

    $respuestas = ["Si", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña"];//     <---- Array normal

    $aleatorio = rand(0,8); //Creamos el numero aleatorio 
    $seleccion = $respuestas[$aleatorio];

    echo "$pregunta </br>";
    echo "$seleccion";

}



?>