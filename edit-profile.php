<?php
include "session.inc";
if(!(isset($_SESSION['uid'])) || !$_SESSION['uid'])
{
include "login.php";
}
else
{
include "profile-header.inc";
echo "<img height=50 width=50 src='/users/".$_SESSION['uid']."/profile_pic.jpg'></img><br>";
}
?>
<form  enctype="multipart/form-data"  action="file_upload.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="52428800" /> 
Send this file: <input name="profile_pic"  type="file"  /><br /> 
<input type="submit" value="Upload Your Profile Picture" /> 
</form>
<?php include "footer.inc";?>