<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 3</title>
</head>



<body>
    <style>
        body{
            font-family: Candara
        }
    </style>

    <form>
        Nome completo:
        <input type="text" name="pesquisa">
        <input type="submit">
    </form>    

    <h1> <?php echo $_GET["pesquisa"];?> </h1>
    <h1> <?php echo strtoupper($_GET["pesquisa"]); ?></h1>
    <h1> <?php echo ucwords($_GET["pesquisa"]); ?></h1>

<?php

    $vetor_nome = explode(" ", $_GET["pesquisa"]);
    echo "<h3>".$vetor_nome[0]. "</h3>";
    echo "<h3>".$vetor_nome[count($vetor_nome)-1]."</h3>";

// SOBRENOME, A. B.  <-- exemplo ABNT
$pronomes = array("de","da","do","dos","das",);
$sobrenome = $vetor_nome[count($vetor_nome)-1];
$iniciais = "";
    for($i=0; $i<count($vetor_nome)-1; $i++){
        if(array_search($vetor_nome[$i],$pronomes)===false){
            $iniciais.= substr($vetor_nome[$i],0,1).".";
        }
    }
        echo "<h3>".strtoupper($sobrenome.", ".$iniciais). "</h3>"
?>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>