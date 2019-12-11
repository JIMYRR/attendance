<?php
 error_reporting(0);
include"php/wjlibrary/config.php";

 $month=$_POST['month'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>my attendance</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
   <?php include"header.php"; ?>
    <!--header end-->

    <!--sidebar start-->
   <?php include"left-sidebar.php"; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> My Atttendance</h3>
            <ol class="breadcrumb">
            <!--   <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li> -->
            </ol>
          </div>
        </div>
        <!-- page start-->
      
     
       
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
            <table>
              <form action="" method="post">
             <tr>
              <td>    
            <select name="month" class="form-control">
                  <option>Select Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>

                </select>
              </td>
              <td><input type="submit" name="btn-month" value="View" class="btn btn-primary btn-sm"></td>
            </tr>
          </form>
          </table>
               
              </header>

              <div class="table-responsive">
                
                <table class="table table-hover">
                  <thead>

                    <tr>
                      <th>SNO.</th>
                      <th>DATE</th>
                      <th>DAY</th>
                      <th>ENTRY TIME</th>
                      <th>WORK STATUS</th>
                      <th>ATTENDANCE</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                  if($month==''){
                    $mon=date('m');
                  }else{
                    $mon=$month;
                  }
                   
                   $db->where("userid",$_SESSION['userid']);
                   $db->where("month",$mon);
                   $data=$db->get("attendance");
                   $c=1;
                      foreach($data as $value){
                    ?>
                    <tr>
                      <td><?=$c++?></td>
                      <td><?=$value['date']?></td>
                      <td><?=$value['day']?></td>
                      <td><?=$value['time']?></td>
                      <td><?=$value['work_status']?></td>
                      <td><?=$value['attend']?></td>
                     
                    </tr>
                   <?php
                      }
                   ?>
                  
                  </tbody>
                </table>
              </div>

            </section>
          </div>
        </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
