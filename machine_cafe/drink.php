<?php
include("choicetypedrinks2.php");
$title= "Machine à café";
?>

<div>
    <div class="drinks-container container">
        <form method="POST" action="payementForm.php">
            <?php foreach ($drinks as $drink) { ?>
                <div class="drink">
                    <input type="checkbox" name="selectedDrinks[]" value="<?php echo $drink['id']; ?>">                
                    <img class="drink-image" height="150" width="150" src="<?php echo $drink['image']; ?>">
                    <p><?php echo $drink['name']; ?><br><?php echo $drink['price']; ?>€</p>   
                </div>
            <?php } ?>  
            <input type="submit" value="Commander">
        </form>
    </div>
</div>
<?php include('parts/footer.php');?>
