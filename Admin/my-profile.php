<?php
 include"php/wjlibrary/config.php";

  $db->where("id",$_SESSION['a-id']);
  $data=$db->getOne("admin_login");

 if(isset($_POST['btn-update'])){
  
   if($_FILES['pimage']['name']==''){
    $img=$data['image'];
   }
   else{
    $img=rand().$_FILES['pimage']['name'];
   }

 $edit=Array('name'=>$_POST['name'],
             
             'image'=>$img
             );
 $db->where("id",$_SESSION['a-id']);
  $update=$db->update("admin_login",$edit);

  if($update){
    move_uploaded_file($_FILES['pimage']['tmp_name'], 'profile_images/'.$img);
  }

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

  <title>my profile</title>

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> My Profile</h3>
            <ol class="breadcrumb">
            <!--   <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li> -->
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?=$_SESSION['a-name']?></h4>
                  <div class="follow-ava">
                    <img src="profile_images/<?=$data['image']?>" alt="no image">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p><?=$_SESSION['a-name']?></p>
                  <p><?=$data['email']?></p>
                  <!-- <p><i class="fa fa-twitter">jenifertweet</i></p> -->
               <!--    <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6> -->
                </div>
               
              
              
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                 
                  <li> <!--  class="active" -->
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
              
                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                    <section class="panel">
                      <div class="bio-graph-heading">
                       some content write here
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span> Name </span>: <?=$data['name']?> </p>
                          </div>
                         
                          <div class="bio-row">
                            <p><span>Email </span>:<?=$data['email']?></p>
                          </div>
                        
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="f-name" name="name" value="<?=$data['name']?>">
                            </div>
                          </div>
                        
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Profile Image</label>
                            <div class="col-lg-6">
                              <input type="file" class="form-control" id="c-name" name="pimage">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="btn-update">Save</button>
                              <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
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
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
