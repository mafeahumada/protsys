<?php 
$nom=$_POST["nom"];
$ape=$_POST["ape"];
$tdoc=$_POST["tdoc"];
$ndoc=$_POST["ndoc"];
$dir=$_POST["dir"];
$barr=$_POST["barr"];
$ciu=$_POST["ciu"];
$tel=$_POST["tel"];
$cor=$_POST["cor"];
$db=mysql_connect("localhost","root","");
mysql_select_db("nuschi",$db);
mysql_query("insert into acudiente values('$nom','$ape','$tdoc','$ndoc','$dir', '$barr','$ciu','$tel','$cor')");
?>
