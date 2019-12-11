<?php

  session_start();

   
    unset($_SESSION['userid']);
    
    
    session_destroy();			
    
    echo '<script type="text/javascript">
                    window.location = "../index.php";
                   </script>';


 // session_start();
 //    if(!isset($_SESSION[LOGIN_USER]))
 //    {
 //        echo '<script type="text/javascript">
	// 	window.location = "https://www.tradeok.org/userLogin.php?msg=SessionExpire";
	//  	</script>'; 
 //    }

?>