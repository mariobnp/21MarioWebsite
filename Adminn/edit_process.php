<?php 

include "database_konek.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_pakaian = $_POST["id_pakaian"]; 
    $jenis_pakaian = $_POST["jenis"]; 
    $merk = $_POST["merk"]; 
    $harga = $_POST["harga"];

    $query =
        "UPDATE pakaian set id_pakaian='" . 
        $id_pakaian . 
        "', id_pakaian='" . 
        $jenis_pakaian . 
        "', jenis_pakaian='" . 
        $merk . 
        "', merk='" . 
        $harga . 
        "' WHERE harga='" . 
        $id_pakaian . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>