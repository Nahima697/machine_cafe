<?php
$title = "Récap de votre commande";
include ('parts/header.php');
session_start();
if (isset($_SESSION["chosenDrinks"])) {
    $chosenDrinks = $_SESSION["chosenDrinks"];
    $totalPrice = $_SESSION["totalPrice"];

    if (count($chosenDrinks) > 0) {
        echo "<h2>Boissons sélectionnées :</h2>";
        foreach ($chosenDrinks as $chosenDrink) {
          echo "<div class='img-ctn'>" ."<p class ='nom'>".$chosenDrink['name'] . "</p><br><img src='" . $chosenDrink['image'] . "'><br><div>";
          $_SESSION["chosenDrinks"][] = $chosenDrinks;
        }
        ?>
        <form method="POST" action="panier.php">
        <?php echo "<p>Prix total : " . $totalPrice . "€</p><br><button>Payer</button>";?>
        <input type ="number" name = "money" step="0.10">;
        <input type= 'hidden' name = "fav" value = '<?php echo serialize($chosenDrinks) ?>'>
        <button formaction="addfav.php"> Ajouter au favori</button>
       <?php 
    } else {
        echo "Aucune boisson sélectionnée.";
    }
} else {
    echo "Aucune boisson sélectionnée.";
}


include ('parts/footer.php');
?>
