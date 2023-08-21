<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>
 
<?php include "./templates/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <p>Add the products you have! and Receive the orders for building and developing Systems</p>
  </div>
</div>

<?php include "./templates/footer.php"; ?>

<!-- <script type="text/javascript" src="./js/admin.js"></script>  -->
