  <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Attendance <span class="lite">System</span></a>
      <!--logo end-->

    

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
         
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
         
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
         
          <!-- alert notification end-->
          <!-- user login dropdown start-->
         
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <?php

              $db->where("user_id",$_SESSION['userid']);
              $pimg=$db->getOne("signup");

                ?>
                            <span class="profile-ava">
                                <img alt="image" src="profile_images/<?=$pimg['image']?>" height="45px" width="60px">
                            </span>
                            <span class="username"><?=$_SESSION['uname']?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="my-profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
             
             
              
              <li>
                <a href="php/logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>