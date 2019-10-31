<?php 
$link = mysqli_connect('localhost','root','','social');
 
if(!$link)
{
	die(mysqli_error($link));
}
?>