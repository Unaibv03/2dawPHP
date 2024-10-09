<?php


if(!empty($_GET['nota'])&&!empty($_GET['edad'])&&!empty($_GET['sexo'])){

    $nota=$_GET['nota'];
    $edad=$_GET['edad'];
    $sexo=$_GET['sexo'];
    

if($nota>=5&&$edad>=18){
    if($sexo=='M'){
        printf('POSIBLE');
    }else{
        if($sexo=='F'){
            printf('ACEPTADA');
        }else{
            printf('NO ACEPTADA1');
        }
    }
}else{
    printf('NO ACEPTADA2');
}

}else{
    echo "No se han dado correctamente los valores";
}

?>