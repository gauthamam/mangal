

<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL)
$host='localhost';
$user='root';
$password=''
$dbname='hpdatabase';

$conn=mysqli_connect($host,$user,$password,$dbname);

if($conn){
echo "database connected";
}else{
  die('connection failed');

}

$user=$_GET['user'];
$pass=$_GET['pass'];


print_r($_GET);

echo $_GET['user'];
echo $user;
echo $_GET['pass'];
echo $pass;
echo $sql="INSERT INTO 'student' (username, password) values('$user','$pass')";
$check = mysqli_query($conn,$sql);
var_dump($check) ;
if($check){
  echo "data inserted successfully";
}else{
  echo " data insertion failed";
}



?>