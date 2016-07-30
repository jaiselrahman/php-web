<?php

include "header.inc";
if($_GET['query'])
{
$fp = popen('grep -risl --include=*.html --include=*.php \''.$_GET['query'].'\'', 'r');

echo 'Showing results for "'.$_GET['query'].'"</br>';

while (!feof($fp))
{  
  $rs=trim(fgets($fp));
		echo "<a href='".$rs."'>".$rs."</a><br>";
}
pclose($fp);
}

include "footer.inc";
?>