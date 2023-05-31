<?php
session_start();

if (!isset($_SESSION['totalPrice'])) {
    $_SESSION['totalPrice'] = 0;
}

$totalPrice = $_SESSION['totalPrice'];
$money = $_POST['money'];

if (isset($_POST['money'])) {
    if ($money > $totalPrice) {
        $change = $money - $totalPrice;
        echo "<p>Voici votre monnaie : $change euros</p> Merci pour votre achat. A bientôt <a href='http://localhost/machine_cafe/welcome.php'>Retour</a>.";
        $_SESSION['money'] = $money;
        $_SESSION['totalPrice'] = 0;
    } elseif ($money < $totalPrice) {
        $remainingAmount = $totalPrice - $money;
        echo "<p>Il manque : $remainingAmount euros</p>";
        $_SESSION['money'] = $money;
        $_SESSION['totalPrice'] = $remainingAmount;
        ?>
        <form method='POST' action='panier.php'>
            <input type='number' name='money' step="0.10" >
            <br>
            <button>Payer</button>
        </form>
        <?php
    } else {
        echo "Merci pour votre achat. A bientôt <a href='http://localhost/machine_cafe/welcome.php'>Retour</a>.";
        $_SESSION['money'] = $money;
        $_SESSION['totalPrice'] = 0;
    }
}
?>


