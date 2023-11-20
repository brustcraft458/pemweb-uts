<?php
if (isset($_GET)) {
    $id = $_GET['id'];
    if (isset($id) && is_numeric($id)) {
        // Lanjut
    } else {
        echo("ID Tidak valid");
        die;
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
    <h1>Edit Data</h1>
    <form action="./backend/edit.php" method="post">
    <?php echo('<input type="hidden" name="id" value="' . $id . '">')?>
    <input type="text" name="name" placeholder="nama produk">
    <input type="number" name="price" placeholder="harga produk">
    <input type="submit" value="update" name="update">
</form>
</body>
</html>