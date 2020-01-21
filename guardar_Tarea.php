<?php

$coneccion= mysqli_connect(
    "localhost",
    "root",
    "",
    "desafio_crud"
    );

if (isset ($_POST))
{
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    }
    
    if (empty ($titulo)){
    die("Debe Ingresar un titulo,reingrese");

    }
    if(empty ($descripcion)){
        die("Debe ingresar una descripcion valida,reingrese");
    }
 

$query= "INSERT INTO tareas(titulo,descripcion) VALUES ('$titulo','$descripcion')";
$resultado=mysqli_query($coneccion,$query);

if(!$resultado)
{

die("Consulta fallida");
}

 session_start();

$_SESSION['mensaje']='Tarea guardada correctamente';

$_SESSION['mensaje_tipo']='success';

header("Location:index.php");




?>


