<?php 
    $querymember = mysqli_query($koneksi, "SELECT * FROM member ORDER BY id DESC");
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $dsc = $_POST['dsc'];
        $foto = $_POST['foto'];
        if(mysqli_num_rows($querymember) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE member SET nama = '$nama', dsc = '$dsc' WHERE id = '1'");
            header("location:?pg=member&edit=berhasil");
        } else{
            // insert
            $insert = mysqli_query($koneksi, "INSERT INTO member (nama, dsc, alamat) VALUES ('$nama', $dsc','$alamat')");
            header("location:?pg=member&tambah=berhasil");
        }
    }
    $rowmember = mysqli_fetch_assoc($querymember);
?>

<form action="" method="post" enctype="multipart/form-data">
    <!-- nama Start -->
    <div class="mb-3">
        <label for="">Nama</label>
        <input value="<?= $rowmember['nama'] ?>" type="text" class="form-control" name="nama" placeholder="Nama" id="">
    </div>

    <!-- No Telp Start -->
    <div class="mb-3">
        <label for="">Description</label>
        <textarea type="text" class="form-control" rows="10" name="dsc" id=""><?= $rowmember['dsc'] ?></textarea>
    </div>
    
    <!-- Foto -->
    <div class="mb-3">
        <label for="">Foto</label>
        <input value="<?= $rowmember['foto'] ?>" type="file" class="form-control" name="foto" id="">
    </div>

    <!-- Button Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary mr-2" name="simpan" value="Simpan">
        <a href="?pg=member">Kembali</a>
    </div>
</form>