<?php $title = "Cecile | Tops";
include "header.php";
?>
<?php
include 'db.php';?>
<?php
if (isset($_POST['liked'])) {
  $product_id = $_POST['product_id'];
  $result = mysqli_query($conn,"SELECT * FROM fatemeh_product WHERE id=$product_id");
  $row= mysqli_fetch_array($result);
  $n=$row['likes'];
  $sql1 = "UPDATE fatemeh_product SET likes=$n+1 WHERE id=$product_id";
  mysqli_query($conn,$sql1);
  $sql2 = "INSERT INTO fatemeh_likes (user_id,product_id) VALUES(1,$product_id)";
  mysqli_query($conn,$sql2);
  exit();
} 
if (isset($_POST['unliked'])) {
  $product_id = $_POST['product_id'];
  $result = mysqli_query($conn,"SELECT * FROM fatemeh_product WHERE id=$product_id");
  $row= mysqli_fetch_array($result);
  $n=$row['likes'];
  $sql3 = "DELETE FROM fatemeh_likes WHERE product_id=$product_id AND user_id=1";
  mysqli_query($conn,$sql3);
  $sql1 = "UPDATE fatemeh_product SET likes=$n-1 WHERE id=$product_id";
  mysqli_query($conn,$sql1);
  exit();
}
?>

  <div class="container">


      
          <div class="p-5 text-center bg-image rounded-3">
        <div class="mask" style="background-color: #ffe8e0d5">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 style="padding-top: 16px; padding-bottom: 16px;">Tops</h1>
              <p class="card-text">Wear exclusive tops</p>

            </div>

            
          </div>
        </div>
  </div>

            


      
            


            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-4" style="float: left;  margin-left: 100px;"  >
                  <div class="product-grid">
                      <div class="product-image">

                          

                          <a href="405.php" class="image">
                              <img src="images/model2.2.png" alt="Hoodie">

                          </a>
                          <a href="404.php" class="add-to-cart">OUT OF STOCK</a>
                      </div>
                      <div class="product-content">
                      <?php
$product_id = 1; 
$result = mysqli_query($conn,"SELECT * FROM fatemeh_product WHERE id=1");
$row= mysqli_fetch_array($result);
?>
                      <?php echo $row['name']; ?>
                          <div class="price" href="unlike.php">60.00???</div>
                        
                          <span class="like-container">
                          <?php 
        $result = mysqli_query($conn, "SELECT * FROM fatemeh_likes WHERE user_id = 1 AND product_id=1");
        if(mysqli_num_rows($result) == 1){?>
        
            <button > <a href="" class="unlike" id="<?php echo 1 ; ?>">unlike</a></button>
        <?php } else { ?>
            <button> <a href="" class="like" id="<?php echo 1  ?>">like</a></button>
        <?php }?>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-4" style="float: right;  margin-right: 100px;" >
                <div class="product-grid">
                    <div class="product-image">
                        <a href="405.php" class="image">

                            

                            <img src="images/model4.3.png" alt="Sweater">

                        </a>
                        
                        <a href="404.php" class="add-to-cart">OUT OF STOCK</a>
                    </div>
                    <div class="product-content">
                    <?php
                    $product_id = 2; 
                    $result = mysqli_query($conn,"SELECT * FROM fatemeh_product WHERE id=2");
                    $row= mysqli_fetch_array($result);
                      ?>
                      <?php echo $row['name']; ?>
                        <div class="price" href="unlike.php">49.00??? <span>70.00???</span></div>
                   
                         <span class="like-container">
                         <?php
                      $result = mysqli_query($conn, "SELECT * FROM fatemeh_likes WHERE user_id = 1 AND product_id=2");
                      if(mysqli_num_rows($result) == 1){?>
                    <button type=""> <a href="" class="unlike"  id="<?php echo 2 ; ?>">unlike</a></button>
                    <?php } else { ?>
                   <button> <a href="" class="like"  style=""  id="<?php echo 2  ?>">like</a></button>
                <?php }?>
                        
                    </div>
                </div>
            </div>
        
          </div>
          <script type="text/javascript" src="min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.like').click(function(){
            var product_id = $(this).attr('id');
            $.ajax({
                url: 'index.php',
                type: 'post',
                async: false,
                data:{
                    'liked':1,
                    'product_id': product_id
                },
                success:function(){
                }
            });
        });

        //when the user click on unlike
        $('.unlike').click(function(){
            var product_id = $(this).attr('id');
            $.ajax({
                url: 'index.php',
                type: 'post',
                async: false,
                data:{
                    'unliked':1,
                    'product_id': product_id
                },
                success:function(){
                   
                }
            });
        });
    });
</script>
          

    <?php include "footer.php" ?>