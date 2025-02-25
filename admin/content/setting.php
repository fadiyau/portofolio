<?php 
    $querySetting = mysqli_query($koneksi, "SELECT * FROM setting ORDER BY id DESC");
    if(isset($_POST['simpan'])){
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $ig = $_POST['ig'];
        $fb = $_POST['fb'];
        $linkedin = $_POST['linkedin'];
        // $logo = $_POST['logo'];                    

        if(mysqli_num_rows($querySetting) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE setting SET email = '$email', no_telp = '$no_telp', alamat = '$alamat', ig = '$ig', fb = '$fb', linkedin = '$linkedin' WHERE id = '2'");
            header("location:?pg=setting&edit=berhasil");
        } else{
            // insert
        $insert = mysqli_query($koneksi, "INSERT INTO setting (email, no_telp, alamat, ig, fb, linkedin) VALUES ('$email', '$no_telp','$alamat', '$ig', '$fb', '$linkedin')");
            header("location:?pg=setting&tambah=berhasil");
        }
    }
    $rowSetting = mysqli_fetch_assoc($querySetting);
?>

<form action="" method="post" enctype="multipart/form-data">
    <!-- Email Start -->
    <div class="mb-3">
        <label for="">Email</label>
        <input value="<?= $rowSetting['email'] ?>" type="email" class="form-control" name="email" placeholder="Email Website" id="">
    </div>

    <!-- No Telp Start -->
    <div class="mb-3">
        <label for="">No Telp</label>
        <input value="<?= $rowSetting['no_telp'] ?>" type="number" class="form-control" name="no_telp" placeholder="No Telpon Website" id="">
    </div>
    
    <!-- Instagram -->
    <div class="mb-3">
        <label for="">Instagram</label>
        <input value="<?= $rowSetting['ig'] ?>" type="url" class="form-control" name="ig" placeholder="Instagram Link" id="">
    </div>

    <!-- Facebook -->
    <div class="mb-3">
        <label for="">Facebook</label>
        <input value="<?= $rowSetting['fb'] ?>" type="url" class="form-control" name="fb" placeholder="Facebook Link" id="">
    </div>

    <!-- Linkedin -->
    <div class="mb-3">
        <label for="">Linkedin</label>
        <input value="<?= $rowSetting['linkedin'] ?>" type="url" class="form-control" name="linkedin" placeholder="Linkedin Link" id="">
    </div>

    <!-- Alamat -->
    <div class="mb-3">
        <label for="">Alamat</label>
        <textarea name="alamat" class="form-control" id=""><?= $rowSetting['alamat'] ?></textarea>
    </div>

    <!-- Button Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary mr-2" name="simpan" value="Simpan">
        <a href="?pg=setting">Kembali</a>
    </div>
</form>