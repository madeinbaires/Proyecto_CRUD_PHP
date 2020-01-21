


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud PHP</title>
    <!--BOOSTRAP 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container">
  <a href="index.php" class="navbar-brand"><strong>Crud PHP<strong></a>
  </div>
  </nav>
<div class="container p-4">
<div class="row">
<div class="col-md-4">

<?php session_start();
if (isset ($_SESSION['mensaje'])){?>

<div class="alert alert-<?=$_SESSION['mensaje_tipo']?> alert-dismissible fade show" role="alert">
<?= $_SESSION['mensaje'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset();}?> 


<div class="card card-body">

<form action="guardarTarea.php" method="POST">
<div class="form-group">
<input type="text" name="titulo" clas="form-control" placeholder="Ingrese el titulo de una tarea" autofocus>
</div>
<div clas="form group">
<textarea name="descripcion" rows="3" class="form-control" placeholder="Ingrese descripcion de la tarea"></textarea>
</div><br>
<input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="Guardar tarea">



</form>
</div>



</div>



<div class="col-md-8">

<table class="table table-border">
<thead>
<tr>
<th>Titulo </th>
<th>Descripcion </th>
<th>fecha de Creado</th>
<th>Operaciones</th>
</tr>
</thead>
<tbody>
<?php 
$coneccion= mysqli_connect(
    "localhost",
    "root",
    "",
    "desafio_crud"
    );

$query="SELECT * FROM  tareas";
$resultado_tareas=mysqli_query($coneccion,$query);


while ($row=mysqli_fetch_array($resultado_tareas)) {?>

<tr>  
<td><?php echo $row['titulo']?></td>
<td><?php echo $row['descripcion']?></td>
<td><?php echo $row['fecha_creado']?></td>
<td>
<a href="borrar_tarea.php?id=<?php echo $row['id']?>" class="btn btn-danger">
<i class="far fa-trash-alt "></i></a>
</td>
</tr>




<?php }?>

</tbody>

</table>


</div>

</div>





</div>
</div>


<!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


</body>

</html>

