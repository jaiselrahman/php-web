<?php 
include "session.inc";
if(!isset($_POST['login'])&&isset($_SESSION['uid']) && $_SESSION['uid'])
header("Location: /profile.php");
if(isset($_POST['signup']))
header("Location: /signup.php");
else if(isset($_POST['login']))
{
         $db=new SQLite3("~db/users.db",SQLITE3_OPEN_READWRITE|SQLITE3_OPEN_CREATE. $error) or die("Failed: $error");
         $ret=$db->query("SELECT * FROM USERS WHERE UNAME='".$_POST['uname']."' and PASSWD='".$_POST['passwd']."';");
         $result = $ret->fetchArray(SQLITE3_ASSOC);
         if($result)
         {  
          $_SESSION['uid']=$_POST['uname'];
          header("Location: /profile.php");          
         }     
         else
         {
             $invalid_user=1;
             include 'login_form.inc';        
         }  
}
else
{
    include 'login_form.inc';
}
     unset($db);
?>