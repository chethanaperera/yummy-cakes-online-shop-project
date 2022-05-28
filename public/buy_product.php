
<?php 
    $pagename = "Yummy Cakes | Product";
    include './headfile.php';
    include '../private/initialize.php';

    $id = $_GET['prod_id'];
    
    $cake_obj =  Product::find_by_id($id);
    echo "<section class='product-to-buy'>";
    echo "<div class='prod-section-1'>";
    echo "<img src='./images/".$cake_obj->img."' alt='product' class='buy-product-img'>";
    echo "<h4 class='selected-prod-price'>$$cake_obj->price</h4>";
    echo "</div>";
    echo "<div class='prod-section-2'>";
    echo "<h2 class='selected-prod-name'>$cake_obj->type</h2>";
    echo "<p class='product-descrip'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum a laborum debitis consectetur 
    alias laudantium, similique quo nesciunt obcaecati deleniti eius nobis non doloremque nemo fuga sequi 
    beatae libero totam.</p>";

    echo "<p>Available : " .$cake_obj->quantity. "</p>";

    echo "<form class='add-to-cart-form' action=cart.php method=post>";
    echo "<input type='number' name='p_qty' value='1' min='1' max='$cake_obj->quantity'  >";
    echo "<small>Select quantity</small>";

    echo "<input class='add-to-cart-btn' type=submit name='submitbtn' value='Add to cart' id='submitbtn'>";
    echo "<input type=hidden name=buy_prodid value=".$id.">";
    echo "</form>";

    echo "</div>";
    echo "</section>";
    
    include './footfile.php';

?>

