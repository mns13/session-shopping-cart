<?php

if (isset($_POST["add"]))
{
    if (isset($_SESSION["cart"]))
    {
        $array_id = array_column($_SESSION["cart"], "product_id");

        //check for already being product in cart
        if (in_array($_POST["product_id"], $array_id))
        {
         echo "<script>alert('Товар уже добавлен')</script>";
         echo "<script>window.location = 'index.php'</script>";
        }
        else 
        {
         $count = count($_SESSION["cart"]);
         $item_array = array(
            'product_id' => $_POST["product_id"],
         );
         $_SESSION["cart"][$count] = $item_array;
        }

    }
    else 
    {
      $item_array = array(
         'product_id' => $_POST["product_id"],
      );

      //create new session variable
      $_SESSION["cart"][0] = $item_array;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping cart</title>
</head>
<body>
    
    
<form method="post" action="">
<!-- <img src="" alt=""> if you need -->
      <div>
        <h5><?php echo $product_title; ?></h5>
        <p><?php echo $product_description; ?></p>
        <h4>
          <small><s><?php echo $product_old_cost; ?></s></small>
          <span class="price"><?php echo $product_cost; ?></span>
        </h4>
        <button type="submit" name="add">Add <i class="fas fa-shopping-cart"></i></button>
        
        <!-- create a hidden propertie for $_REQUEST or $_POST. we need that later -->
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        
      </div>       
</form>
    
    
</body>
</html>