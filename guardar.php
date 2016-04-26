<?php 
$nit=$_POST["nit"];
$ras=$_POST["ras"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$email=$_POST["cor"];
$db=mysql_connect("localhost","root","");
mysql_select_db("clientes",$db);
mysql_query("insert into cliente values('$nit','$ras','$dire','$tel','$cor',)");
?>
