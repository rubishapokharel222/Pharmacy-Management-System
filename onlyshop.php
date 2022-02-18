  
<?php require"header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/shopp.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome/font-awesome.min.css">


<style>
  .home-img img{
    height: 200px !important;
    object-fit: cover;
  }
</style>
<!--------------------------------------------shop-------------------------->
<br>
<div class="container">
<h4>Notice:Here are the medicines available.To buy the medicine you must register or login your account</h4><br><br>
  <header id="header">
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" style="width: 1161px; height: 54px; top: 10px;">
      <a href="shop.php" class="navbar-brand">
        <h3 class="px-5"><i class="fa fa-shopping-basket"></i>Medicines</h3>
      </a>
  <h1><i class="fa fa-shopping-cart" style="width: 3%; position: relative; top: 5px; left: 1890%; cursor: pointer;"></i></h1>
</nav>
</header>

 
  <div class="row home-img text-center py-5" style="margin-top: 4px;">
    
<div class="container"> 
<div class="row text-center home-img py-4 shop">
        <?php
        require("database.php");

        $sql = "SELECT * FROM medicine";
        $result = $con->query($sql);
        if($result->num_rows>0){
          while ($row=$result->fetch_assoc()) {;?>
           <div class="col-md-3 col-sm-6 my-md-0">
            <div class="card shadow d-flex justify-content-center">

          <form action="addtocart.php">
            <div class="">
            <img src="images/<?php echo $row['medicine_image'] ?>"  class="img-fluid card-img-top" style="height: 147px;">
            <h5><?php echo $row['medicine_name'];?></h5>
            <p class="card-title"><?php echo $row['description'];?></p>
            
            
            <button type="button" class="btn btn-primary"><h5><?php echo "Rs " .$row['medicine_price'];?></h5></button>
          
          </div>
          </form>
        </div>
        </div>
  
        <?php }
      }
        ?>
      </div>
    </div>



  <script type="text/javascript">
    var noti = document.querySelector('h1');
    var select = document.querySelector('.select');
    var button = document.getElementsByTagName('button');
    for(but of button) {
      but.addEventListener('click',(e)=>{
        var add = Number(noti.getAttribute('data-count') || 0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');
      })
    }
  </script>


