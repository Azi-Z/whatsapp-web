<?php
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Origin: *');
$obj = json_decode($_GET["x"], false);


  $DBhost = "localhost";   //Once databse is connection is given, the insert query can be given anywhere below .. it will accept
  $DBuser = "root";
  $DBpass = "";
  $DBname = "asim";

 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
$result = $DBcon->query("SELECT * FROM `wtapp`");
//echo $result;
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>
