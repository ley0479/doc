<?php
$conexión =mysqli_connect("localhost","root","","login_registro_ab");

if($conexión){
    echo 'conectado exitosamente a la Base de datos';
}else{
    echo 'No se ha podido conectar a la Base de datos';
}

?>