<?php

$server ="localhost";
$username ="root";
$password = "";
$dbname ="Userdetails";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    echo "not connected";
}

else
{
    echo "connect";
}


//start


$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];

$sql ="INSERT INTO `Userdetails`(`Name`, `Email`, `Password`, `Comfirmpassword`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";

$result = mysqli_query($conn ,$sql);

if($result)
{
echo "data submited";
}

else
{
    echo "query failed....!";
}
?>