<?php 
$title="Welcome"

?>

<h2>Cliquez sur la machine pour voir les boissons</h2>
<div class="container2 ">
    <div class="coffee-header">
      <div class="coffee-header__buttons coffee-header__button-one"></div>
      <div class="coffee-header__buttons coffee-header__button-two"></div>
      <div class="coffee-header__display"></div>
      <div class="coffee-header__details"></div>
    </div>
    <button><a href="http://localhost/machine_cafe/drink.php"></button>
    <div class="coffee-medium">
      <div class="coffe-medium__exit"></div>
      <div class="coffee-medium__arm"></div>
      <div class="coffee-medium__liquid"></div>
      <div class="coffee-medium__smoke coffee-medium__smoke-one"></div>
      <div class="coffee-medium__smoke coffee-medium__smoke-two"></div>
      <div class="coffee-medium__smoke coffee-medium__smoke-three"></div>
      <div class="coffee-medium__smoke coffee-medium__smoke-for"></div>
      <div class="coffee-medium__cup"></div>
    </div>
    <div class="coffee-footer"></div>
  </div>
  <div>
    <button formaction ="http://localhost/machine_cafe/addfav.php>" value ="<?php echo($_COOKIE['favDrinks']) ?>">Vos boissons favorites</button>
  </div>
<?php include ('parts/header.php');
include("data.php");
include ('parts/footer.php');
?>

