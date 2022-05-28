<?php 
$pagename = "Yummy Cakes | Shopping Cart";
include './headfile.php';
include '../private/initialize.php';

if(isset($_POST['removed_prodid'])){
    $delprodid=$_POST['removed_prodid'];
    unset($_SESSION['basket'][$delprodid]);
}

if(isset($_POST['clearbtn'])){
    unset($_SESSION['basket']);
}

if(isset($_POST['buy_prodid'])){
    $prodid=$_POST['buy_prodid']; 
    $qty=$_POST['p_qty'];

    $_SESSION['basket'][$prodid]=$qty;
}

echo "<section class='cart-main'>";

$total = 0;

echo "<div class='cart-container' >";
echo "<section class='cart-section' >";
echo "<table class='cart' >";

if(isset($_SESSION['basket'])){
    echo "<tr>";
    echo "<th>Product Name</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Subtotal</th>";
    echo "<th>Remove Product</th>";
    echo "</tr>";

    foreach($_SESSION['basket'] as $index => $value){
        $cake_obj =  Product::find_by_id($index);

        echo "<tr>";
        echo "<td>".$cake_obj->type."</td>";
        echo "<td>&pound;".number_format($cake_obj->price, 2)."</td>";
        echo "<td style='text-align: center;'>".$value."</td>";
        $subtotal = $value * $cake_obj->price;
        echo "<td>&pound;".number_format($subtotal, 2)."</td>";
        echo "<form action=cart.php method=post>";
        echo "<td>";
        echo "<input type=submit value='Remove' id='submitbtn' class='remove-btn'>";
        echo "</td>";
        echo "<input type=hidden name=removed_prodid value=".$index.">";
        echo "</form>";
        echo "</tr>";
        $total+= $subtotal;
    }
    
    echo "<tr>";
    echo "<td colspan=4 class='total-text'><b>total<b></td>";
    echo "<td class='total-price'><b>&pound;".number_format($total, 2)."<b></td>";
    echo "</b></tr>";
    echo "</table>";
}
else{
    echo "<div class='empty-basket-text'><p>Empty basket</p>"; 
    echo "<a href='index.php' class='empty-cart-shop'><button type='button'>shop now</button></a>";
    echo "</div>";
}

echo "<div class='cart-btns'>";

if(isset($_SESSION['basket'])){
    echo "<form id='clear-cart' action=cart.php method=post>";
    echo "<input class='clear-cart' type=submit value='Clear Cart' name='clearbtn'>";
    echo "</form>";
    echo "<p class='checkout'><a href=''>check-out</a></p>";
}
echo "</div>";
echo "</section>";
echo "</div>";
echo "</section>";
include './footfile.php';
?>
