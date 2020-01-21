<?php
$conexion= mysqli_connect(
    "localhost",
    "root",
    "",
    "desafio_crud"
    );

    if (isset ($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE from tareas where id=$id";
        $resultado=mysqli_query($conexion,$query);
        if(!resultado){
            die('Consulta fallida');        
    }


        $_SESSION['mensaje']="tarea removida correctamente";
        $_SESSION['mensaje_tipo']="danger";
        header("Location: index.php")
        ;  
    }
  

?>
