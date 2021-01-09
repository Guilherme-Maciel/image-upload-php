<?php
include "connect.php";

$name = $_POST['name'];
$desc = $_POST['desc'];
$fileTmp = $_FILES['image']['tmp_name'];
$fileType = $_FILES['image']['type'];

$image = addslashes(file_get_contents($fileTmp));

$sql -> query("INSERT INTO users(u_name, u_desc, u_image, u_tipo) VALUES ('$name', '$desc', '$image', '$fileType')");

if($sql){
    echo"Dado salvo";
    echo"<a href='images.php'>Veja</a>";
}
else{
    echo"erro";
}

?>