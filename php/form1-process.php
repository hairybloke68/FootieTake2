<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$d1g1t1 = $_POST['d1g1-1'];
$d1g1t2 = $_POST['d1g1-2'];
$d2g1t1 = $_POST['d2g1-1'];
$d2g1t2 = $_POST['d2g1-2'];
$d2g2t1 = $_POST['d2g2-1'];
$d2g2t2 = $_POST['d2g2-2'];
$d2g3t1 = $_POST['d3g3-1'];
$d2g3t2 = $_POST['d3g3-2'];
$d3g1t1 = $_POST['d3g1-1'];
$d3g1t2 = $_POST['d3g1-2'];
$d3g2t1 = $_POST['d3g2-1'];
$d3g2t2 = $_POST['d3g2-2'];
$d3g3t1 = $_POST['d3g3-1'];
$d3g3t2 = $_POST['d3g3-2'];
$d3g4t1 = $_POST['d3g4-1'];
$d3g4t2 = $_POST['d3g4-2'];
$d4g1t1 = $_POST['d4g1-1'];
$d4g1t2 = $_POST['d4g1-2'];
$d4g2t1 = $_POST['d4g2-1'];
$d4g2t2 = $_POST['d4g2-2'];
$d4g3t1 = $_POST['d4g3-1'];
$d4g3t2 = $_POST['d4g3-2'];
$d4g4t1 = $_POST['d4g4-1'];
$d4g4t2 = $_POST['d4g4-2'];
$d5g1t1 = $_POST['d5g1-1'];
$d5g1t2 = $_POST['d5g1-2'];
$d5g2t1 = $_POST['d5g2-1'];
$d5g2t2 = $_POST['d5g2-2'];
$d5g3t1 = $_POST['d5g3-1'];
$d5g3t2 = $_POST['d5g3-2'];
$d5g4t1 = $_POST['d5g4-1'];
$d5g4t2 = $_POST['d5g4-2'];
$d6g1t1 = $_POST['d6g1-1'];
$d6g1t2 = $_POST['d6g1-2'];
$d6g2t1 = $_POST['d6g2-1'];
$d6g2t2 = $_POST['d6g2-2'];
$d6g3t1 = $_POST['d6g3-1'];
$d6g3t2 = $_POST['d6g3-2'];
$d6g4t1 = $_POST['d6g4-1'];
$d6g4t2 = $_POST['d6g4-2'];
$d7g1t1 = $_POST['d7g1-1'];
$d7g1t2 = $_POST['d7g1-2'];
$d7g2t1 = $_POST['d7g2-1'];
$d7g2t2 = $_POST['d7g2-2'];
$d7g3t1 = $_POST['d7g3-1'];
$d7g3t2 = $_POST['d7g3-2'];
$d7g4t1 = $_POST['d7g4-1'];
$d7g4t2 = $_POST['d7g4-2'];
$d8g1t1 = $_POST['d8g1-1'];
$d8g1t2 = $_POST['d8g1-2'];
$d8g2t1 = $_POST['d8g2-1'];
$d8g2t2 = $_POST['d8g2-2'];
$d8g3t1 = $_POST['d8g3-1'];
$d8g3t2 = $_POST['d8g3-2'];
$d8g4t1 = $_POST['d8g4-1'];
$d8g4t2 = $_POST['d8g4-2'];
$d9g1t1 = $_POST['d9g1-1'];
$d9g1t2 = $_POST['d9g1-2'];
$d9g2t1 = $_POST['d9g2-1'];
$d9g2t2 = $_POST['d9g2-2'];
$d9g3t1 = $_POST['d9g3-1'];
$d9g3t2 = $_POST['d9g3-2'];
$d9g4t1 = $_POST['d9g4-1'];
$d9g4t2 = $_POST['d9g4-2'];
$d10g1t1 = $_POST['d10g1-1'];
$d10g1t2 = $_POST['d10g1-2'];
$d10g2t1 = $_POST['d10g2-1'];
$d10g2t2 = $_POST['d10g2-2'];
$d10g3t1 = $_POST['d10g3-1'];
$d10g3t2 = $_POST['d10g3-2'];
$d10g4t1 = $_POST['d10g4-1'];
$d10g4t2 = $_POST['d10g4-2'];
$d11g1t1 = $_POST['d11g1-1'];
$d11g1t2 = $_POST['d11g1-2'];
$d11g2t1 = $_POST['d11g2-1'];
$d11g2t2 = $_POST['d11g2-2'];
$d11g3t1 = $_POST['d11g3-1'];
$d11g3t2 = $_POST['d11g3-2'];
$d11g4t1 = $_POST['d11g4-1'];
$d11g4t2 = $_POST['d11g4-2'];
$d12g1t1 = $_POST['d12g1-1'];
$d12g1t2 = $_POST['d12g1-2'];
$d12g2t1 = $_POST['d12g2-1'];
$d12g2t2 = $_POST['d12g2-2'];
$d12g3t1 = $_POST['d12g3-1'];
$d12g3t2 = $_POST['d12g3-2'];
$d12g4t1 = $_POST['d12g4-1'];
$d12g4t2 = $_POST['d12g4-2'];

//Connect to Database
$host_name = 'db5009890006.hosting-data.io';
$database = 'dbs8386903';
$user_name = 'dbu2473701';
$password = 'EX66y00@156';
$connect = mysql_connect($host_name, $user_name, $password, $database);

if (mysql_errno()) {
   die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
  
//send data

$sql = "INSERT INTO footieForm1 (fname, sname, d1g1t1, d1g1t2, d2g1t1, d2g1t2, d2g2t1, d2g2g2, d2g3t1, d2g3t2,
d3g1t1, d3g1t2, d3g2t1, d3g2t2, d3g3t1, d3g3t2, d3g4t1, d3g4t2, 
d4g1t1, d4g1t2, d4g2t1, d4g2t2, d4g3t1, d4g3t2, d4g4t1, d4g4t2, 
d5g1t1, d5g1t2, d5g2t1, d5g2t2, d5g3t1, d5g3t2, d5g4t1, d5g4t2, 
d6g1t1, d6g1t2, d6g2t1, d6g2t2, d6g3t1, d6g3t2, d6g4t1, d6g4t2, 
d7g1t1, d7g1t2, d7g2t1, d7g2t2, d7g3t1, d7g3t2, d7g4t1, d7g4t2, 
d8g1t1, d8g1t2, d8g2t1, d8g2t2, d8g3t1, d8g3t2, d8g4t1, d8g4t2,
d9g1t1, d9g1t2, d9g2t1, d9g2t2, d9g3t1, d9g3t2, d9g4t1, d9g4t2, 
d10g1t1, d10g1t2, d10g2t1, d10g2t2, d10g3t1, d10g3t2, d10g4t1, d10g4t2, 
d11g1t1, d11g1t2, d11g2t1, d11g2t2, d11g3t1, d11g3t2, d11g4t1, d11g4t2, 
d12g1t1, d12g1t2, d12g2t1, d12g2t2, d12g3t1, d12g3t2, d12g4t1, d12g4t2, rank) 
VALUES ($fname, $sname, $d1g1t1, $d1g1t2, $d2g1t1, $d2g1t2, $d2g2t1, $d2g2g2, $d2g3t1, $d2g3t2,
$d3g1t1, $d3g1t2, $d3g2t1, $d3g2t2, $d3g3t1, $d3g3t2, $d3g4t1, $d3g4t2, 
$d4g1t1, $d4g1t2, $d4g2t1, $d4g2t2, $d4g3t1, $d4g3t2, $d4g4t1, $d4g4t2, 
$d5g1t1, $d5g1t2, $d5g2t1, $d5g2t2, $d5g3t1, $d5g3t2, $d5g4t1, $d5g4t2, 
$d6g1t1, $d6g1t2, $d6g2t1, $d6g2t2, $d6g3t1, $d6g3t2, $d6g4t1, $d6g4t2, 
$d7g1t1, $d7g1t2, $d7g2t1, $d7g2t2, $d7g3t1, $d7g3t2, $d7g4t1, $d7g4t2, 
$d8g1t1, $d8g1t2, $d8g2t1, $d8g2t2, $d8g3t1, $d8g3t2, $d8g4t1, $d8g4t2,
$d9g1t1, $d9g1t2, $d9g2t1, $d9g2t2, $d9g3t1, $d9g3t2, $d9g4t1, $d9g4t2, 
$d10g1t1, $d10g1t2, $d10g2t1, $d10g2t2, $d10g3t1, $d10g3t2, $d10g4t1, $d10g4t2, 
$d11g1t1, $d11g1t2, $d11g2t1, $d11g2t2, $d11g3t1, $d11g3t2, $d11g4t1, $d11g4t2, 
$d12g1t1, $d12g1t2, $d12g2t1, $d12g2t2, $d12g3t1, $d12g3t2, $d12g4t1, $d12g4t2, 0"

