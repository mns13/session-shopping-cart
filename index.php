


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