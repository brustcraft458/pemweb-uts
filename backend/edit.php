<?php
require './../config/db.php';

if (isset($_POST)) {
    print_r($_POST);
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        
        $result = mysqli_query($db_connect, "UPDATE products SET name = '$name', price = $price WHERE id = $id");

        $pesan = "";
        if(mysqli_affected_rows($db_connect) > 0) {
            $pesan = "Data Berhasil diedit";
        } else {
            $pesan = "Data Gagal diedit";
        }

        header('Location: ./../show.php?alert="' . $pesan . '"');
    }
}
?>