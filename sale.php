<?php $title = "Cecile | Sale";
include "header.php";
?>

<div class="container">

  <div class="p-5 text-center bg-image rounded-3" style="height: 200px; background-repeat: no-repeat;">
    <div class="mask" style="background-color: #ffe8e0d5">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 style="padding-top: 16px; padding-bottom: 16px;">Sale</h1>
          <p class="card-text">Limited time sale until 24/03/2023</p>

        </div>

        
      </div>
    </div>
</div>




<div class="row">

    <div class="product-grid">
        <div class="product-image">
            <a href="405.php" class="image">
                <img src="images/model4.10.png" alt="modelfour">
            </a>
            
            <a href="405.php" class="add-to-cart">OUT OF STOCK</a>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="405.php">Sweater</a></h3>
            <div class="price">49.00€ <span>70.00€</span></div>
            <button onclick="addToFavoriteList(<?php echo $product_id; ?>" style="margin-top:8px;")>Add to favorite list</button>
            
        </div>
    
</div>

</div>

<?php include "footer.php" ?>