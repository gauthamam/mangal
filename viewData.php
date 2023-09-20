<?php

$conn=mysqli_connect('localhost','root','','hpdatabase'); 
$sql="SELECT * FROM student " ;
$check = mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($check);
if($rowcount>0){

while($data=mysqli_fetch_assoc($check)){
    echo "<br>" ,$data['Id'] ;
    echo "<br>" ,$data['username'] ;
    echo "<br>" ,$data['password'] ;
}
print_r($data);




}else{

    echo "no data bhai";
}






?>