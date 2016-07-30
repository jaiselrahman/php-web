<?php 
if(isset($_POST['signup']) && ($_SERVER['REQUEST_METHOD'] == 'POST'))
{
         $db=new SQLite3("~db/users.db",SQLITE3_OPEN_READWRITE|SQLITE3_OPEN_CREATE. $error) or die("Failed: $error");
         $ret=$db->query("SELECT * FROM USERS WHERE UNAME='".$_POST['uname']."';");
         $result = $ret->fetchArray(SQLITE3_ASSOC);
         if($result)
         {
             $user_exist=1;
             include "signup_form.inc";
             $user_exist=0;
         }
         else
         {
             if(strlen($_POST['uname'])>5 && ($_POST['passwd']))
             {
                 $db->exec("INSERT INTO USERS VALUES('".$_POST['uname']."','".$_POST['email']."','".$_POST['passwd']."');");                
                 mkdir('users/'.$_POST['uname']);
                 system('/system/bin/cp ~pics/profile_pic.jpg users/'.$_POST['uname']);
                 include "session.inc";
                 $_SESSION['uid']=$_POST['uname'];          
                 header("Location: /profile.php");
             }
             else
             {
                 $invalid_user=1;
                 include "signup_form.php";
                 $invalid_user=0;
             
             }
         }  
}
else
include "signup_form.inc";       
     unset($db);    
?>