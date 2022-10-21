
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adivinha o que?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  </head>
  <body>  

    <div class="container-xxl vh-100 game">
         <div class="nav"><h2>O Número que você pensou foi:</h2></div>
        <form method="POST" action="jogo.php">
        <div class="jogo">

<?php
$op = $_POST["op"];
$op1 = $_POST["op1"];
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];
$op4 = $_POST["op4"];
$op5 = $_POST["op5"];


/*
$tabela2 = $_POST['opcao2'];
$tabela3 = $_POST['opcao3'];
$tabela4 = $_POST['opcao4'];
$tabela5 = $_POST['opcao5'];
$tabela6 = $_POST['opcao6'];




echo"tabela 1 =".$tabela1;
echo"tabela 2 =".$tabela2;
echo"tabela 3 =".$tabela3;
echo"tabela 4 =".$tabela4;
echo"tabela 5 =".$tabela5;
echo"tabela 6 =".$tabela6;
*/
if($op =="sim"){
   $op = 1;
    

} if($op1 =="sim"){
     $op1 = 2;
   
}
 if($op2 =="sim"){
     $op2 = 4;
   
}
 if($op3 =="sim"){
     $op3 = 8;
   
}
 if($op4 =="sim"){
    $op4 = 16;
    
}
 if($op5 =="sim"){
     $op5 = 32;
    
}


if($op== "nao"){
    $op = 0;
   

} if($op1 == "nao"){
    $op1 = 0;
    

} if($op2 == "nao"){
   $op2 = 0;
    

} if($op3 == "nao"){
     $op3 = 0;
  

} if($op4 == "nao"){
     $op4 = 0;
    

} if($op5 == "nao"){
     $op5 = 0;
   

}


$resultado = $op + $op1 +$op2 + $op3 + $op4 + $op5;

echo "<span class='res'>$resultado</span>";
?>



</div>
<div class="botao">
    <button type="submit">Voltar</button>
</div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>