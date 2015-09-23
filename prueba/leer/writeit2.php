<?php

$mybody = stripslashes($_POST["body"]);

if(!$mybody){
print "&returnMe=Server Error!";
exit;
}else{
$xml=$mybody;
$file= fopen("test.xml", "w");
fwrite($file, "$xml");
print "&returnMe=File saved";
}
?>