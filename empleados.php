<?php

session_start();

$averageAgeMen = 0;

//session_destroy();

if($_POST){




if(isset($_POST['lenguaje'])){

  $radioboton= $_POST['lenguaje'];

  if($radioboton=="Femenino"){

    $valor= str_replace(",", " ", $_POST['lenguaje']);

    if(!empty($_POST['valores'])){
    
      $valores= explode(",", $_POST['valores']);
    
    
    }else{
    
        $valores= array();
    
    
    }
    
    
    array_push($valores, $valor);
    
    $_SESSION['data']= $valores;
    

    
    /*for($i=0; $i<count($valores); $i++){
    
       //echo $valores[$i]. "<br/>";
    
    }*/
    



  }




  
  if(isset($_POST['estado'])){

    $estado= $_POST['estado'];

  
    if(isset($_POST['txtSueldo'])){

      $sueldo= $_POST['txtSueldo'];


  
  
  if($radioboton=="Masculino" && $estado =="Casado" && $sueldo> 2500){

   
    $valor1= str_replace(",", " ", $_POST['lenguaje']);

    if(!empty($_POST['valores1'])){
    
      $valores1= explode(",", $_POST['valores1']);
    
    
    }else{
    
        $valores1= array();
    
    
    }
    
    
    array_push($valores1, $valor1);
    
    $_SESSION['data1']= $valores1;
    
    
    
    


    }


    if($radioboton=="Femenino" && $estado =="Viudo" && $sueldo> 1000){

   
      $valor2= str_replace(",", " ", $_POST['lenguaje']);
  
      if(!empty($_POST['valores500'])){
      
        $valores2= explode(",", $_POST['valores500']);
      
      
      }else{
      
          $valores2= array();
      
      
      }
      
      
      array_push($valores2, $valor2);
      
      $_SESSION['data500']= $valores2;
      
      
      
      
  
  
      }
  

  

  }






}
if ($radioboton == "Masculino") {
 
  if (isset($_POST['txtEdad'])) {
    $edad = $_POST['txtEdad'];
    if (is_numeric($edad)) {
        
    $_SESSION['data3'][] = $edad;


          }
    }
}


}




}


//=========================================================================================================


if (isset($_SESSION['data'])) {
  $i = count($_SESSION['data']);
  echo "Total de empleados de sexo femenino: " . $i . "<br/><br/>";
} else {
  echo "Total de empleados de sexo femenino: 0<br/><br/>";
}

// Muestra la cantidad de Hombres casados que ganan más de 2500
if (isset($_SESSION['data1'])) {
  $j = count($_SESSION['data1']);
  echo "Total de Hombres casados que ganan más de 2500: " . $j . "<br/><br/>";
} else {
  echo "Total de Hombres casados que ganan más de 2500: 0<br/><br/>";
}

if (isset($_SESSION['data500'])) {
  $f = count($_SESSION['data500']);
  echo "Total de Mujeres viudas que ganan más de 1000: " . $f . "<br/><br/>";
} else {
  echo "Total de Mujeres viudas que ganan más de 1000: 0<br/><br/>";
}


if (isset($_SESSION['data3'])) {

  if (count($_SESSION['data3']) > 0) {
  
  $averageAgeMen =array_sum($_SESSION['data3'])/count($_SESSION['data3']);

}

  echo "Edad promedio de los hombres: " . $averageAgeMen . "<br/><br/>";
} else {
    echo "Edad promedio de los hombres: 0<br/><br/>";

}








/*if($_POST){

  $radioboton=(isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

    echo ($radioboton=="Femenino")?"Femenino":"";

    echo ($radioboton=="Masculino")?"Masculino":"";


}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    
<a href="index.php">Volver al formulario</a>

</body>
</html>



