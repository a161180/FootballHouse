<!-- 
  Name: Aiman Harith Bin Abdul Rahim
  Matric Number: A161180
   

  --> 
<?php
session_start();
 if (!isset($_SESSION['username'])) {
     header('Location: login.php');
     exit();
 } ?>


  <!DOCTYPE html> 
  <html> 
  <head> 
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Kedai Bola Lala</title> 
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
      html {
        width:100%;
        height:100%;
        min-height:100%;
      }
      form{
        text-align: center;
      }

    </style>
  </head> 


<body bgcolor="#D4AC0D">

<?php include_once 'nav_bar.php';
      include_once 'database.php';
 ?>

<?php

      // Read
      $per_page = 6;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_products_a161180_pt2 LIMIT $start_from, $per_page");
  $stmt->execute();
  $result = $stmt->fetchAll();
  }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>


<?php  foreach($result as $readrow) { ?>

    <div style="text-align: center" class="container" id="tourpackages-carousel">
      
      <div class="row">
        
        <div class="col-md-4">
          <div class="thumbnail">
            <img style="width:300px;height:400px;" src="products/<?php echo $readrow['FLD_PRODUCT_ID'] ?>.PNG" alt="">
              <div class="caption">
                <h4><?php echo $readrow['PRODUCT_NAME'] ?></h4>
                <h6>Name : <?php echo $readrow['PRODUCT_NAME'] ?></h6>
                <h6>Brand : <?php echo $readrow['BRAND'] ?></h6>
                <h6>Price : RM <?php echo $readrow['PRICE'] ?></h6>
<!--                 <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
            </div>
          </div>
        </div>

<?php } ?>
              </div>
      </div>

<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a161180_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="catalogue.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"catalogue.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"catalogue.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="catalogue.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>

  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body> 
  </html>