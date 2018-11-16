<?php 
$year=2018-$_POST['years'];
$tax='';
$req='';
$tech='';
if($_POST['tax']=="Yes"){
	$tax="Yes";
}else{
	$tax="No";}
if($_POST['req']=="Yes"){
	$req="Yes";
}else{
	$req="No";}
if($_POST['tech']=="Yes"){
	$tech="Yes";
}else{
	$tech="No";}
echo "You added new item: ".$_POST['cars'].' '.$_POST['model']."<br/>";
echo "The vehicle produced in ".$_POST['years']."(".$year." years old) with ".$_POST['fuel']." engine<br/>"; 
echo "Tax payed: ".$tax."<br/>";
echo "Techical check passed: ".$tech."<br/>";
echo "Doesn't require investment: ".$req."<br/>";
echo "$ ".$_POST['price'];

 ?>