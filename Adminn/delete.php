<?php

include "database_konek.php"; 
$id_pakaian = $_GET["id_pakaian"];

$query = "DELETE FROM pakaian WHERE id_pakaian='" . $id_pakaian . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:index.php?message=" . $message . "");

?>