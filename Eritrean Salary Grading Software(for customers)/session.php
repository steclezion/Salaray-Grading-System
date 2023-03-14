<?php
//Start session
//session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
/*if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['id'];
*/
?>
<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) 
{
    header("location: index.php");
    }
	 else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) 
		{
            session_destroy();

          header('location:55525e1b3dfd8787fd202aed45fb04494e3242d0.php');
        }
        }
   
$id_p=$_SESSION['polino'];