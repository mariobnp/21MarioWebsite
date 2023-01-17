<?php

include "database_konek.php";
$query = "SELECT * FROM pakaian WHERE id_pakaian='" . $_GET['id_pakaian'] . "'";
$result = mysqli_query($db_connect, $query);
$customer = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4"> 
        <div class="page-header mb-4">
            <h2>Edit Barang</h2> 
        </div> 
        <div class="row"> 
            <div class="col-md-12"> 
                <form action="edit_process.php" method="post">
                    <input type="hidden" name="id_pakaian" value="<?php echo $_GET["id_pakaian"]; ?>" class="form-control" required> 
                    <div class="form-group">
                        <label for="exampleInputEmail">Jenis Barang</label>
                        <input type="jenis_pakaian" name="jenis" class="form-control" value="<?php echo $customer["jenis_pakaian"] ?>" required> 
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail">Merk</label>
                        <input type="merk" name="merk" class="form-control" value="<?php echo $customer["merk"] ?>" required> 
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail">Harga</label>
                        <input type="harga" name="harga" class="form-control" value="<?php echo $customer["harga"] ?>" required> 
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button> 
                </form> 
            </div> 
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<label for="" ></label>