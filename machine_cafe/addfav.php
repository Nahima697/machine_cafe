<?php
include('data.php');
$title = "Vos habitudes";
include ('parts/header.php');
if (isset ($_POST["fav"])) {
    $favDrinks = unserialize($_POST['fav']);
    foreach($favDrinks as $favDrink) {
     echo $favDrink['name'] ."<div class='img-ctn'><img src = '". $favDrink['image']."'></div>";
    }
};

setcookie("favDrinks",serialize($favDrinks)); ?>
<a href='http://localhost/machine_cafe/welcome.php'>Retour</a>
<?php include ('parts/footer.php');
?>