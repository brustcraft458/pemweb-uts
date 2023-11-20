<?php
session_start();
if($_SESSION['role']  != 'admin') {
    echo("anda bukan admin: ");
    header('Location:index.php');
}

if (isset($_GET)) {
    if (isset($_GET['alert'])) {
        $pesan = $_GET['alert'];
        // echo("<script>alert('$pesan')</script>");
        echo("alert: " . $pesan);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama produk</th>
                <th>harga</th>
                <th>gambar produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
                    //print_r($row['id']);
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                    <td><a href="<?=$row['image'];?>" target="_blank">unduh</a></td>
                    <td>
                        <a href="./edit.php?id=<?=$row['id'];?>">Edit</a>
                        <a href="./backend/delete.php?id=<?=$row['id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="./create.php">Tambah Produk</a><br>
    <a href="./admin.php">Kembali</a>
</body>
</html>