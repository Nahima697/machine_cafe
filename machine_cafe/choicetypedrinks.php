<?php
include('parts/header.php');
$title= "Machine à café";
include('data.php');
?>
<div class="container">
<form method="GET"class="form" >
    <legend>Choisi le type de boisson</legend>  
      <input type="checkbox" name="type" value="warm" <?php echo (isset ($_GET['type'])? ($_GET['type']==='warm' ? 'checked' : "") : "")?> >
      <label for="chaudes">Chaudes</label>
      <input type="checkbox" name="type" value="cold" <?php echo (isset ($_GET['type'])? ($_GET['type']==='cold' ? 'checked' : "") : "")?>>
      <label for="Froides">Froides</label>  
      <input type="submit">
      Valider
      </input>
</form>
</div>
<?php

if (isset($_GET["type"]) ) {
    $filteredDrinks = [];
    foreach ($drinks as $drink) {
        if ($drink["type"] === $_GET['type']) {
            array_push($filteredDrinks, $drink);
        }
    }
    $drinks = $filteredDrinks;
}

?>
<div class="container">
    <form method="GET">
    <legend>Avec ou sans Sucre?</legend>
    <div>
        <label>
            <input type="checkbox" name="sugar" value="true"<?php echo (isset ($_GET['sugar'])? ($_GET['sugar']==='true' ? 'checked' : "") : "")?> >
            Avec
        </label>
    </div>
    <div>
        <label>
            <input type="checkbox" name="sugar" value="false"<?php echo (isset ($_GET['sugar'])? ($_GET['sugar']==='false' ? 'checked' : "") : "")?> >
            Sans
        </label>
    </div>
    <input type="hidden" name="type" value="<?php echo isset($_GET['type']) ? $_GET['type'] : ''; ?>">
    <input type="submit" value="Valider">
    </form>
</div>

<?php

// if (isset($_GET["sugar"])) {
//     function filterDrink($drink,$param)
//     {
//         return $drink[$param] == $_GET[$param];
//     }
//     $sugarFiltered = array_filter($drinks, "filterDrink");
//     $drinks = $sugarFiltered;
// }

if (isset($_GET["sugar"])&& isset($_GET["type"]) || (isset($_GET["sugar"]))){
    $sugarFiltered = [];
    foreach ($drinks as $drink) {
        if ($drink["sugar"] === ($_GET['sugar'] === 'true')) {
            $sugarFiltered[] = $drink;
        }
    }
    $drinks = $sugarFiltered;
}

?>
<div class="container">
<form method="GET" class="form">
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
     <input type="hidden" name="sugar" value="<?php echo isset($_GET['sugar']) ? $_GET['sugar'] : ''; ?>">
    <input type="submit" value="Valider">
</form>
</div>
<?php

if (isset($_GET["milk"]) && isset($_GET["sugar"]) ) {
    $milkFiltered = [];
    foreach ($drinks as $drink) {
        if ($drink["milk"] === ($_GET['milk'] === 'true') && $drink["sugar"] === ($_GET['sugar'] === 'true') ) {
            $milkFiltered[] = $drink;
        }
    }
    $drinks = $milkFiltered;
}


?>
