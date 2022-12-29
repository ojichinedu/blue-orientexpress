<?php 
include("../db.php");
$trackingid=$_POST['trackingid'];
$sql="SELECT * FROM trackingid where trackingid='$trackingid'"; 

$result=mysqli_query($conn,$sql) or die("data retrieval error");

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

}

else{
  $error="Invalid tracking id";
  header("location:../index.php?error=.$error");
}








?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blue Orient Express- Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-php-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpg" alt="">
        <span class="d-none d-lg-block">Blue Orient Express</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
        
        <h3 style="margin-top:15px;margin-right:150px;"><b>Tracking ID: <?php echo $row['trackingid']; ?></b></h3>
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->





      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
     
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3" >
                      <p style="margin-top:20px;"><b>Dispatched Date: <?php echo $row['shipmentdate']; ?></b></p>
                      <br>
                      <p style="color:green;"><b>Status: <?php echo $row['status']; ?></b></p>
                      <br>
                      <p><b>Expected Date: <?php echo $row['dateofdelivery']; ?></b></p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6" style="margin-top:-10px;">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3" >
                      <br>
                      <p style="background-color:black;color:white;padding:10px 19px 10px 19px;"><b>Origin</b></p>
                      <br>
                      <p><b>Sender Name: <?php echo $row['sendername']; ?></b></p>
                      <br>
                      <p style="color:green;"><b>Location: <?php echo $row['location']; ?></b></p>
                      <br>
                      <p><b>Sender Address: <?php echo $row['senderaddress']; ?></b></p>
                      <p><b>Shipment Date: <?php echo $row['shipmentdate']; ?></b></p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3" >
                <br>
                <p style="background-color:black;color:white;padding:10px 19px 10px 19px;"><b>Shipment Details</b></p>
                      <br>
                      <p><b>Weight: <?php echo $row['weight']; ?></b></p>
                      <br>
                      <p><b>Service Type: <?php echo $row['servicetype']; ?></b></p>
                      <br>
                      <p><b>Description: <?php echo $row['description']; ?></b></p>
                      <br>
                      <p><b>Quantity: <?php echo $row['quantity']; ?></b></p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
               <!-- Revenue Card -->
               <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                 
                  <br>
                  <p style="background-color:black;color:white;padding:10px 19px 10px 19px;"><b>Destination</b></p>
                  <br>
                  <p><b>Receiver Name: <?php echo $row['receivername']; ?></b></p>
                      <br>
                      <p><b>Receiver E-mail: <?php echo $row['receiveremail']; ?></b></p>
                      <br><p><b>Receiver Address: <?php echo $row['receiveraddress']; ?></b></p>
                      <br>
                      <p><b>Expected Date Of Delivery: <?php echo $row['dateofdelivery']; ?></b></p>

                 



                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-12">

             <?php 


              $bql="SELECT * FROM history WHERE trackingid='$trackingid'";
              $rose=mysqli_query($conn,$bql) or die("data retrieval error");                                                                                                                                                                                                          
              $count=0;
              $tablearray=array();
while($po=mysqli_fetch_assoc($rose)){
              $tablearray[$count]['date']=$po['date'];
              $tablearray[$count]['location']=$po['location'];
              $tablearray[$count]['remark']=$po['remark'];
              $tablearray[$count]['status']=$po['status'];
              $count++;
            }



            ?>

                

<div class="table-responsive">
<table class="table table-striped table-light table-bordered">
    <thead class="thead-dark">
<tr>
    <th><b>Date</b></th>
    <th><b>Location</b></th>
    <th><b>Remark</b></th>
    <th><b>Status</b></th>
</tr>
</thead>
<tbody>
<?php foreach($tablearray as $po){?>
    <tr>
        <td style="color:green;"><b><?php echo $po['date'];?></b></td>
        <td><b><?php echo $po['location'];?></b></td>
        <td><b><?php echo $po['remark'];?></b></td>
        <td><b><?php echo $po['status'];?></b></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
                  
                    
                
                      

           

            </div><!-- End Customers Card -->

           

            

            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-xxl-12 col-lg-12">

  

          

          

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Blue Orient Express</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>