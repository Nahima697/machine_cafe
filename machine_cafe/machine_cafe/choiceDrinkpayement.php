<?php
session_start();
if (isset($_SESSION["chosenDrinks"])) {
    $chosenDrinks = $_SESSION["chosenDrinks"];
    $totalPrice = $_SESSION["totalPrice"];

    if (count($chosenDrinks) > 0) {
        echo "<h2>Boissons sélectionnées :</h2>";
        foreach ($chosenDrinks as $chosenDrink) {
            echo $chosenDrink['name'] . "<br><img src='" . $chosenDrink['image'] . "'><br></p>";
        }
        ?>
        <form method="POST" action="panier.php">
        <?php echo "<p>Prix total : " . $totalPrice . "€</p><br><button>Payer</button>";?>
        <input type ="number" name = "money" step="0.10">;
    
       <?php 
        unset($_SESSION["chosenDrinks"]);
    } else {
        echo "Aucune boisson sélectionnée.";
    }
} else {
    echo "Aucune boisson sélectionnée.";
}
?>
