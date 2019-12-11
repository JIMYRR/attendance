
<?php
 
 error_reporting(0);
  
   // $day=date("l");
   // if($day=='Sunday'){
   //    $btn='disabled';
   //    $m='Today Is Sunday';
   //   }
include"php/wjlibrary/config.php";
  

 $db->where('user_id',$_SESSION['id']);
 $name=$db->getOne("signup");

 $current_date=date('d/m/Y');
 $current_time=date('h:i:s a');
 $today=date('l');
 $month=date('m');
 
 $time=explode(' ',$current_time);
  
  // get time and date code

  if($time[0]<='11:00:00' && $time[1]=='am'){
    $status="Full day";
  }
  else{
    $status="Half Day";
  }
 if($time[0]<'11:50:00' && $time[1]=='am'){
   $btn;
 }else{
   $btn="disabled";
 }


  // addendance insert code

if(isset($_REQUEST['attendance'])){
   $p="Present";
  $arr=Array('userid'=>$_SESSION['userid'],
             'date'=>$_POST['date'],
             'time'=>$_POST['time'],
             'day'=>$_POST['day'],
             'month'=>$month,
             'work_status'=>$_POST['status'],
             'attend'=>$p);
   $db->insert("attendance",$arr);

}

    // leave insert code

//   if(isset($_REQUEST['leave'])){
//    $p="Leave";
//    $s="On Leave";
//   $arr=Array('userid'=>$_SESSION['userid'],
//              'date'=>$_POST['date'],
//              'time'=>$_POST['time'],
//              'day'=>$_POST['day'],
//              'month'=>$month,
//              'work_status'=>$s,
//              'attend'=>$p);
//    $db->insert("attendance",$arr);

// }
    
 // button disabled code 

 $db->where('userid',$_SESSION['userid']);
      $data=$db->get("attendance");
       foreach($data as $value){
         $value['day'];
       }
    
       if($value['date']==$current_date){
        $btn="disabled";
       }

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

  <title>Home Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
 
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


  <?php include"header.php"; ?>
    <!--header end-->

    <!--sidebar start-->
    <?php include"left-sidebar.php"; ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
            <!--   <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li> -->
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              
              <div class="count"><?=$current_date?></div>
              <div class="title">Date</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              
              <div class="count"><?=$today?></div>
              <div class="title">Day</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              
              <div class="count"><?=$current_time?></div>
              <div class="title">Your Entry Time</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              
              <div class="count"><?=$status?></div>
              <div class="title">Status</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
           
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <form method="post" action="">
              <input type="hidden" name="date" value="<?=$current_date?>">
              <input type="hidden" name="time" value="<?=$current_time?>">
              <input type="hidden" name="status" value="<?=$status?>">
              <input type="hidden" name="day" value="<?=$today?>">
              <div class="count"><input type="submit" value="Click To Attendance" name="attendance" class="btn btn-primary btn-lg btn-block" <?=$btn?>></div> <!-- <?=$btn?> -->
             
             </form>
            <!--/.info-box-->
          </div>

           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          
              <form action="leave.php" method="post">
              <div class="count"><input type="submit" value="Click To Leave" name="leave" class="btn btn-warning btn-lg btn-block" <?=$btn?>></div>
              </form>

            <!--/.info-box-->
          </div>
         
        </div>
        <!--/.row-->


             
            </div>

          </div>

       

        </div>
        <!-- project team & activity end -->

      </section>
     
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
