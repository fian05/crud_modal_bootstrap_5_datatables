<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <label for="nama">Nama</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST["tambah"])) {
        mysqli_query($koneksi, "INSERT INTO data (nama) VALUES ('".$_POST["nama"]."')");
        echo "<script>window.location='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
    ?>
</div>