<?php 

// add_process.php
include "database_konek.php";

if(count($_POST) > 0) {
    $id_pakaian= $_POST["id_pakaian"]; 
    $jenis_pakaian = $_POST["jenis"]; 
    $merk = $_POST["merk"]; 
    $harga = $_POST["harga"];

    $query = "INSERT INTO pakaian (id_pakaian, jenis_pakaian, merk, harga) VALUES ('$id_pakaian', '$jenis_pakaian', '$merk', '$harga')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>