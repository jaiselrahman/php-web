<?php 
$title="JAISEL-About You";
include"header.inc";
?>
<table align=centre border=1>
<tr>
<th align=left>VARIABLE</th>
<th align=left>VALUE</th>
</tr>
<?php 
foreach($_ENV as $var => $value)
echo  '<tr><td>'.$var.'</td><td>'.$value.'</td></tr>';
?>
</table>
<?php include "footer.inc"; ?> 