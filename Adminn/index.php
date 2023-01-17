<?php

include 'database_konek.php';
$query = "SELECT * FROM pakaian limit 200";
$result = mysqli_query($db_connect, $query);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Keranjang Barokah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="float-start mb-4">
                    <h2>List Barang</h2>
                </div>
                <div class="float-end">
                    <a href="../index.html" class="btn btn-warning">Ke Toko</a>
                </div>
                <div class="float-end">
                    <a href="add.php" class="btn btn-success">Tambah Barang</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Merk Barang</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fetch data customer dengan arry associative -->
                        <?php if ($result->num_rows > 0) : ?>
                            <?php while ($customer_data = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <th scope="row"><?php echo $customer_data['id_pakaian'] ?></th>
                                    <td><?php echo $customer_data['jenis_pakaian'] ?></td>
                                    <td><?php echo $customer_data['merk'] ?></td>
                                    <td><?php echo $customer_data['harga'] ?></td>
                                   
                                    <td>
                                        <a href="edit.php?id_pakaian=<?php echo $customer_data['id_pakaian']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="delete.php?id_pakaian=<?php echo $customer_data['id_pakaian']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" rowspan="1" headers="">Tidak ada data ditemukan!</td>
                            </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>