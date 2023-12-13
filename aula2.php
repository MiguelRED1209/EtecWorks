<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaeeeooo</title>

<!-- codigo de getbootstrap  !-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="aula2.php?opcao=1">Kirby</a>
        <a href="aula2.php?opcao=2">Pokemon</a>
        <a href="aula2.php?opcao=3">Yoshi's</a>  
      

    </li>
      
    </ul>
  </div>
</nav>

<?php
if (isset($_GET["opcao"])) {
    $opcao= $_GET["opcao"];
} else {
    $opcao=0;
}
if($opcao==1){
    echo'<img src="https://i.pinimg.com/736x/14/5f/8f/145f8f220ecbc5e9b954d1443bb9fef8.jpg">';
} elseif($opcao==2){
    echo'<img src="https://i.pinimg.com/736x/3d/6b/d4/3d6bd4f60725f5863aa39540b9c9a555.jpg">';
} elseif($opcao==3){
    echo'<img src="https://i.pinimg.com/originals/f1/f6/5f/f1f65f301f5455812181b4ee2c5c6738.jpg">';
}
?>

</body>



</html>