<?php 
$title="JAISEL-signup";
include "header.inc";
include "js/signup_form_validate.js";
if($user_exist)
echo "User Already Exists";
if($invalid_user)
echo "Invalid Entry"
?>
<br>
<form name='signup_form'  method=post onsubmit="return validate();"  action="/signup.php">
<table align=centre>
<tr>
<td>User Name </td><td>:<input type=textbox id='uname' name='uname' onkeyup="check_v_uname();" value=<?php echo $_POST['uname']?>></td>
<td><div id='div_uname' >&nbsp;&nbsp;&nbsp;</div></td>
</tr>
<tr>
<td>E-mail id </td><td>:<input type=textbox id='email' name='email' onkeyup="check_v_mail();" value=<?php echo $_POST['email']?>></td>
<td><div id='div_email'>&nbsp;&nbsp;&nbsp;</div></td>
</tr>
<tr>
<td>Password </td><td>:<input type=password id='passwd' name='passwd' onkeyup="check_v_pass(true);" value=<?php echo $_POST['passwd']?>></td>
<td><div id='div_passwd' name='div_passwd' >&nbsp;&nbsp;&nbsp;</div></td>
</tr>
<tr>
<td>Re-Enter Password </td><td>:<input type=password id='passwd2' name='passwd2' onkeyup="comp_pass();" value=<?php echo $_POST['passwd2']?>></td>
<td><div id='div_passwd2' name='div_passwd2'>&nbsp;&nbsp;&nbsp;</div></td>
</tr>
    
<td>
<input type=submit  name='signup' value='Signup'>
</td>
<tr>
</table>
</form>
<?php include"footer.inc"?>