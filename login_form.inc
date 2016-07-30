<?php 
$title="JAISEL-login";
include"header.inc";
?>
<?php
if($invalid_user)
echo "Invalid user name or password";
?>
<form method='post' action="/login.php">
<table align=centre>
<tr>
<td>User Name </td><td>:<input type='textbox' name='uname' value=<?php echo $_POST['username']?>></td>
</tr>
<tr>
<td>Password  </td><td>:<input type='password' name='passwd' ><br></td>
</tr>
<tr></tr>
<tr></tr>
</td>
<tr>
<td>
<input type='submit' name='login' value='login'>
</td>
<td>
New User ?      
<input type='submit' name='signup' value='Signup' >
</td>
<tr>
</table>
</form>
<?php include"footer.inc"?>