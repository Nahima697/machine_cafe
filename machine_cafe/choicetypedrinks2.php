<?php
$title= "Machine à café";
include('parts/header.php');

include('data.php');
?>
<div class="container">
<form method="GET"class="form" >
    <legend>Choisi le type de boisson</legend>  
      <input type="checkbox" name="type" value="warm" >
      <label for="chaudes">Chaudes</label>
      <input type="checkbox" name="type" value="cold" >
      <label for="Froides">Froides</label> 
      <legend>Avec ou sans Sucre?</legend>
    <div>
        <label>
            <input type="checkbox" name="sugar" value="true" >
            Avec
        </label>
    </div>
    <div>
        <label>
            <input type="checkbox" name="sugar" value="false" >
            Sans
        </label> 
        <legend>Avec ou sans Lait?</legend>
    <div>
        <label>
            <input type="checkbox" name="milk" value="true">
            Avec
        </label>
    </div>
    <div>
        <label>
            <input type="checkbox" name="milk" value="false">
            Sans
        </label>
    </div>
      <input type="submit">
      </input>
</form>
</div>
<?php

if (isset($_GET["type"])) {
    $filteredDrinks = [];
    foreach ($drinks as $drink) {
        if ($drink["type"] === $_GET['type'] ) {
            array_push($filteredDrinks, $drink);
        }
    }
    $drinks = $filteredDrinks;
}


if ( isset($_GET["sugar"]) ){

    $sugarfiltered = [];
    foreach ($drinks as $drink) {
        if ( $drink["sugar"] === ($_GET['sugar'] === 'true') ) {
            array_push($sugarfiltered, $drink);
        }
        }
        $drinks = $sugarfiltered;
    };

if (isset($_GET["milk"])) {
    $milkFiltered = [];
    foreach ($drinks as $drink) {
        if ($drink["milk"] === ($_GET['milk'] === 'true')  ) {
            $milkFiltered[] = $drink;
        }
    }
    $drinks = $milkFiltered;
}


?>
