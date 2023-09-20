<?php

$conn=mysqli_connect('localhost','root','','tutorial'); 
$sql="SELECT * FROM register " ;
$check = mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($check);
if($rowcount>0){

while($data=mysqli_fetch_assoc($check)){
    echo "<br>" ,$data['id'] ;
    echo "<br>" ,$data['expen1'] ;
    echo "<br>" ,$data['expen2'] ;
    echo "<br>" ,$data['expt'] ;
    echo "<br>" ,$data['gain1'] ;
    echo "<br>" ,$data['gain2'] ;
    echo "<br>" ,$data['gaint'] ;
    echo "<br>" ,$data['balance'] ;

}
print_r($data);




}else{

    echo "no data bhai";
}






?>