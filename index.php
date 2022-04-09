<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Modal Bootstrap 5 & Datatables by Arfian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="container">
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button><br><br>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "modal");
            $sql = mysqli_query($koneksi, "SELECT * FROM data");
            if(mysqli_num_rows($sql) > 0){
                while($data = mysqli_fetch_array($sql)) {
            ?>
                    <tr>
                        <td><?php echo $data["id"]; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td>
                            <a data-bs-target="#edit<?php echo $data["id"]; ?>" data-bs-toggle="modal" class="btn btn-warning">Edit</a>
                            <a data-bs-target="#hapus<?php echo $data["id"]; ?>" data-bs-toggle="modal" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    include "edit.php";
                    include "hapus.php";
                }
            } ?>
        </tbody>
    </table>
    
    <?php include "tambah.php"; ?>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
</body>
</html>