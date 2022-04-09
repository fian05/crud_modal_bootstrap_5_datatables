<div class="modal fade text-center" id="edit<?php echo $data["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
            </div>
            <form method="POST">
                <input type="text" name="id" value="<?php echo $data["id"]; ?>" hidden>
                <div class="modal-body">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data["nama"]; ?>">
                        <label for="nama">Nama</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST["edit"])) {
        mysqli_query($koneksi, "UPDATE data SET nama='".$_POST["nama"]."' WHERE id=".$_POST["id"]);
        echo "<script>window.location='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
    ?>
</div>