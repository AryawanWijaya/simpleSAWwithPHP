<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'spk';

$conn = mysqli_connect($server,$username,$password,$db_name);

if(!$conn){
    echo "db tidak terkoneksi";
}else{
//    echo "db terkoneksi";
}
?>