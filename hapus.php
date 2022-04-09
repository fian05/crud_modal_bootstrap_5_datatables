<div class="modal fade text-center" id="hapus<?php echo $data["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus</h5>
            </div>
            <form method="POST">
                <input type="text" name="id" value="<?php echo $data["id"]; ?>" hidden>
                <div class="modal-body">
                    Yakin data <?php echo $data["nama"] ?> dihapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="hapus" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST["hapus"])) {
        mysqli_query($koneksi, "DELETE FROM data WHERE id=".$_POST["id"]);
        echo "<script>window.location='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
    ?>
</div>