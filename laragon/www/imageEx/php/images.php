<?php
include "connect.php";

$dados = mysqli_query($sql, "SELECT u_image, u_tipo FROM users");
while($listar = mysqli_fetch_array($dados)){
    $tipo = $listar['u_tipo'];

    echo '<img src="data:'.$tipo.';base64,'.base64_encode($listar['u_image']).'"/>';
}

?>