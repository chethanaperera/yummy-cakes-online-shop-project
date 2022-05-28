<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> 
        <?php echo $pagename ?> 
    </title>
    <script src="https://kit.fontawesome.com/370c06a72a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
    <nav class="navbar">
        <div class="navbar-center">
            <span class="nav-icon">
                <a href="index.php"><i class="fas fa-home"></i></a>
            </span>
            <div class="cart-btn">
                <span class="nav-icon">
                    <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <div class="cart-items">
                    <?php 
                    session_start();
                    include '../private/initialize.php';
                    $total_items = 0;
                    if(isset($_SESSION['basket'])){
                        foreach($_SESSION['basket'] as $value){
                            $total_items += $value;
                        }
                        echo $total_items;
                    }
                    else {
                        echo "0";
                    }
                    ?>
                </div>   
            </div>
        </div>
    </nav>