<html>
<head>
<title><?php echo $title ?></title>
</head>
<body>
<table>
<tr>
<th><img height=25 width=25 src=<?php echo "'/users/".$_SESSION['uid']."/profile_pic.jpg'" ?> ></img>
<th><a href=/profile.php><?php echo $_POST['uname']?></a></th>
<td><a href=/edit-profile.php>Profile</a></td>
<td><a href=/aboutme.php>About Me</a></td>
<td><a href=/aboutyou.php>About You</a></td>
<td><a href=/logout.php>logout</a></td>
</tr>
</table>
<hr>
<table>