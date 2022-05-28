<?php 
    $pagename = "Yummy Cakes";
    include './headfile.php' ?>
    
    <header class="start-section-container">
        <div class="start-section">
            <h1 class="start-section-title">Yummy Cakes</h1>
            <a href='#prod-section' class="start-section-btn">shop now</a>
        </div>
    </header>
    
    <?php include '../private/initialize.php' ?>
    
    <section id="prod-section" class="products">
        <div class="section-title">
            <h2>Cakes</h2>
        </div>
        <div class="products-center">

        <?php 
        

        $obj_array =  Product::find_all();

        foreach($obj_array as $cake){
            echo "<article class='product'>";
            echo "<div class='img-container'>";
            echo "<a href=buy_product.php?prod_id=".$cake->id."><img src='./images/".$cake->img."' alt='product' class='product-img'></a>";
            echo "</div>";
            echo "<h3>$cake->type</h3>";
            echo "<h4>$$cake->price</h4>";
            echo "</article>";
        }
        ?>

        </div>
    </section>

<?php include './footfile.php' ?>