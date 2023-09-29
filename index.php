<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Mooli&family=Roboto+Condensed:ital@0;1&family=Roboto:wght@100;300;400;900&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>

<form action="empleados.php" method="post">


<div class="container-ti">

<h2 class="titulo">Registro de Empleados</h2><br>


</div>

<?php

session_start();

//session_destroy();

if(!isset($_SESSION['data'])){

 $_SESSION['data']= array();

}

if(!isset($_SESSION['data1'])){

    $_SESSION['data1']= array();
   
   }

   if(!isset($_SESSION['data500'])){

    $_SESSION['data500']= array();
   
   }


   if(!isset($_SESSION['data3'])){

    $_SESSION['data3']= array();
   
   }



?>

<div class="container-in">

<h2>Ingresa tus Datos</h2>

</div>

<div class="container_registro">

  <div class="regitrosDatos">

<label class="idNombre" for="idNombre">Nombre</label><br>

<input class="txtNombre" type="text" name="txtNombre" id="" required><br>

<label  class="idApellido" for="idApellido">Apellido </label><br>

<input class="txtApellido" type="text" name="txtApellido" id="" required><br>

<label  class="idEdad" for="idEdad">Edad</label><br>

<input class="txtEdad" type="number" name="txtEdad" id="" required><br><br>

</div>

<div class="registroEstado">

<label class="idCivil" for="">Estado Civil: </label><br><br>

<label class="idSoltero" for="idSoltero">Soltero(a) </label>

<input  class="estadoSoltero" type="radio" name="estado" id="" value="Soltero" required><br>

<label class="idCasado" for="idCasado">Casado(a) </label>

<input  class="estadoCasado" type="radio" name="estado" id="" value="Casado" required><br>

<label class="idViudo" for="idViudo">Viudo(a) </label>

<input class="estadoViudo" type="radio" name="estado" id="" value="Viudo" required><br><br>

</div>

<div class="OtrosDatos">

<label class="idSexo" for="">Sexo: </label><br><br>

<label class="idMasculino" for="idMasculino">Masculino </label>

<input class="radioMasculino" type="radio" name="lenguaje" id="" value="Masculino" required><br>

<label class="idFemenino" for="idFemenino">Femenino </label>

<input class="radioFemenino" type="radio" name="lenguaje" id="" value="Femenino" required><br><br>

<label class="idSueldo" for="idSueldo">Sueldo</label><br>

<input class="txtSueldo" type="number" name="txtSueldo" id=""  required><br><br>

<input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data'])?>">

<input type="hidden" name="valores1" value="<?php echo implode(",", $_SESSION['data1'])?>">

<input type="hidden" name="valores500" value="<?php echo implode(",", $_SESSION['data500'])?>">

<input type="hidden" name="valores2" value="<?php echo implode(",", $_SESSION['data3'])?>">

</div>


</div>



<input class="btnAñadir" type="submit" value="Añadir Empleado" name="btnAñadir" class="btn btn-primary"><br><br>





</form>
    
</body>
</html>