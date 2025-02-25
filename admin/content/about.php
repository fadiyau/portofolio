<?php 
    $queryAbout = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id DESC");
    if(isset($_POST['simpan'])){
        $perkenalan = $_POST['perkenalan'];
        $latar_belakang = $_POST['latar_belakang'];
        // $logo = $_POST['logo'];                    

        if(mysqli_num_rows($queryAbout) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE about SET perkenalan = '$perkenalan', latar_belakang = '$latar_belakang' WHERE id = '2'");
            header("location:?pg=about&edit=berhasil");
        } else{
            // insert
            $insert = mysqli_query($koneksi, "INSERT INTO about (perkenalan, latar_belakang) VALUES ('$perkenalan', '$latar_belakang')");
            header("location:?pg=about&tambah=berhasil");
        }
    }
    $rowabout = mysqli_fetch_assoc($queryAbout);
?>

<form action="" method="post" enctype="multipart/form-data">
    <!-- perkenalan Start -->
    <div class="mb-3">
        <label for="">Perkenalan</label>
        <input value="<?= $rowabout['perkenalan'] ?>" type="text" class="form-control" name="perkenalan" placeholder="perkenalan Website" id="">
    </div>

    <!-- No Telp Start -->
    <div class="mb-3">
        <label for="">Latar Belakang</label>
        <input value="<?= $rowabout['latar_belakang'] ?>" type="text" class="form-control" name="latar_belakang" placeholder="No Telpon Website" id="">
    </div>
    
    <!-- Button Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary mr-2" name="simpan" value="Simpan">
        <a href="?pg=about">Kembali</a>
    </div>
</form>