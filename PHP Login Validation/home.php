<?php

$userName =$_REQUEST['username'];
$usrEmail =$_REQUEST['email'];
$usePass  =$_REQUEST['password'];
$counTpass =strlen($usePass);

if(!( $counTpass >= 5 && $counTpass <= 10)){

 header("location: login.php?worngPass=you enterd password = $usePass.");

}else{
echo "You are welcome";
}

?> 