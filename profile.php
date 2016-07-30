<?php
include "session.inc";
if(!(isset($_SESSION['uid'])) || !$_SESSION['uid'])
{
include "login.php";
}
else
{
    $title="JAISEL-".$_SESSION['uid'];    
    include"profile-header.inc";
    echo "UNAME:".$_POST['uname']."   UID:".$_SESSION['uid'];
    //echo  getenv("DNS");
    include "footer.inc";
}
?>