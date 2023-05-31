<?php
session_start();

if (isset($_POST["selectedDrinks"])) {
    include("data.php");
    $selectedDrinkIds = $_POST["selectedDrinks"];
    $totalPrice = 0; 

    foreach ($drinks as $drink) {
        if (in_array($drink["id"], $selectedDrinkIds)) {
            if (!isset($_SESSION["chosenDrinks"])) {
                $_SESSION["chosenDrinks"] = []; 
            }
            $_SESSION["chosenDrinks"][] = $drink;
            $totalPrice += $drink['price']; 
        }
    }

    $_SESSION["totalPrice"] = $totalPrice; 

    header("Location: choiceDrinkpayement.php");
    exit();
} else {
    header("Location: welcome.php");
    exit();
}

?>
