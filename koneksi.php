<?php
//host,user,password,nama database
$conn = mysqli_connect('localhost', 'root', '', 'kampus_db');

if(!$conn){
    die('Ada Error = ' . mysqli_connect_error());
}

?>