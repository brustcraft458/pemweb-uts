<?php
require './../config/db.php';

if (isset($_GET)) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $result = mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");

        $pesan = "";
        if(mysqli_affected_rows($db_connect) > 0) {
            $pesan = "Data Berhasil dihapus";
        } else {
            $pesan = "Data Gagal dihapus";
        }

        header('Location: ./../show.php?alert="' . $pesan . '"');
    }
}
?>