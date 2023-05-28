<?php
session_start();
if (isset($_SESSION["choicedDrinks"])) {
    $choicedDrinks = $_SESSION["choicedDrinks"];
    $totalPrice = $_SESSION["totalPrice"];

    if (count($choicedDrinks) > 0) {
        echo "<h2>Boissons sélectionnées :</h2>";

        foreach ($choicedDrinks as $choicedDrink) {
            echo "<p>Vous avez choisi " . $choicedDrink['name'] . "<br><img src='" . $choicedDrink['image'] . "'><br></p>";
        }

        echo "<p>Prix total : " . $totalPrice . "€</p><br><button>Payer</button>";

        unset($_SESSION["choicedDrinks"]);
        unset($_SESSION["totalPrice"]);
    } else {
        echo "Aucune boisson sélectionnée.";
    }
} else {
    echo "Aucune boisson sélectionnée.";
}
?>
