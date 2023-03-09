<?php $title = "Cecile | Admin Page";
include "header.php"; ?>


<style>
    .middle{
        margin: 0 auto;
        text-align: center;
        font-size: 30px;
        padding-bottom: 30px;
    }
</style>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="style.css">
    
    <link href='adminpage.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      
    </div>
      <ul class="nav-links">
        
        
          
        
      
  </div>
  
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
       
      </div>
      
      <div class="profile-details">
        
        <span class="admin_name">Logged in as Team 15</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">0</div>
            <div class="indicator">
              
              <span class="text">No changes</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">0</div>
            <div class="indicator">
              
              <span class="text">No changes</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
          <a href="subscribersRead.php">Total newsletter subscribers</a>
            
            <div class="indicator">
              
              <span class="text">No changes</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            
            <a href="feedbackRead.php">Received feedback</a>
            
            <div class="indicator">
              
              
            </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Selling Products</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="images\model2.2.png" alt="">
              <span class="product">Hoodie</span>
            </a>
            <span class="price">Really high amount</span>
          </li>
          <li>
            <a href="#">
             <img src="images\model4.7.png" alt="">
              <span class="product">Sweater</span>
            </a>
            <span class="price">High amount</span>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  

</body>
</html>





<?php include "footer.php"; ?>