<?php 
    $queryeducation = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id DESC");
    if(isset($_POST['beducation'])){
        $nama_sekolah = $_POST['nama_sekolah'];
        $alamat = $_POST['alamat'];
        $tahun_masuk = $_POST['tahun_masuk'];
        $tahun_keluar = $_POST['tahun_keluar'];
        // $logo = $_POST['logo'];                    

        if(mysqli_num_rows($queryeducation) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE education SET nama_sekolah = '$nama_sekolah', alamat = '$alamat', tahun_masuk = '$tahun_masuk', tahun_keluar = '$tahun_keluar' WHERE id = '1'");
            header("location:?pg=resume&edit=berhasil");
        } else{
            // insert
            $insert = mysqli_query($koneksi, "INSERT INTO education (nama_sekolah, alamat, tahun_masuk, tahun_keluar) VALUES ('$nama_sekolah', '$alamat','$tahun_masuk', '$tahun_keluar')");
            header("location:?pg=resume&tambah=berhasil");
        }
    }
    $roweducation = mysqli_fetch_assoc($queryeducation);

    $querySkill = mysqli_query($koneksi, "SELECT * FROM skill ORDER BY id DESC");
    if(isset($_POST['bskill'])){
        $skill_satu = $_POST['skill_satu'];
        $skill_dua = $_POST['skill_dua'];
        $skill_tiga = $_POST['skill_tiga'];
        $skill_empat = $_POST['skill_empat'];
        // $logo = $_POST['logo'];                    

        if(mysqli_num_rows($querySkill) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE skill SET skill_satu = '$skill_satu', skill_dua = '$skill_dua', skill_tiga = '$skill_tiga', skill_empat = '$skill_empat' WHERE id = '4'");
            header("location:?pg=resume&edit=berhasil");
        } else{
            // insert
            $insert = mysqli_query($koneksi, "INSERT INTO skill (skill_satu, skill_dua, skill_tiga, skill_empat) VALUES ('$skill_satu', '$skill_dua','$skill_tiga', '$skill_empat')");
            header("location:?pg=resume&tambah=berhasil");
        }
    }
    $rowSkill = mysqli_fetch_assoc($querySkill);

    $queryExp = mysqli_query($koneksi, "SELECT * FROM experience ORDER BY id DESC");
    if(isset($_POST['bexp'])){
        $posisi_jabatan = $_POST['posisi_jabatan'];
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $tahun_masuk = $_POST['tahun_masuk'];
        $keterangan_satu = $_POST['keterangan_satu'];
        $keterangan_dua = $_POST['keterangan_dua'];
        $keterangan_tiga = $_POST['keterangan_tiga'];
        // $logo = $_POST['logo'];                    

        if(mysqli_num_rows($queryExp) > 0){
            // update
            $id = mysqli_insert_id($koneksi);
            $update = mysqli_query($koneksi, "UPDATE experience SET posisi_jabatan = '$posisi_jabatan', nama_perusahaan = '$nama_perusahaan', tahun_masuk = '$tahun_masuk', keterangan_satu = '$keterangan_satu', keterangan_dua = '$keterangan_dua', keterangan_tiga = '$keterangan_tiga' WHERE id = '1'");
            header("location:?pg=resume&edit=berhasil");
        } else{
            // insert
            $insert = mysqli_query($koneksi, "INSERT INTO experience (posisi_jabatan, nama_perusahaan, tahun_masuk, keterangan_satu, keterangan_dua, keterangan_tiga) VALUES ('$posisi_jabatan', '$nama_perusahaan','$skill_tiga', '$keterangan_satu', '$keterangan_dua', '$keterangan_tiga')");
            header("location:?pg=resume&tambah=berhasil");
        }
    }
    $rowExp = mysqli_fetch_assoc($queryExp);


?>

<div class="row">
    <div class="col">
        <div class="row">
            <!-- Education -->
            <div class="col col-12">
                <div class="card p-5 mb-2">
                    <div class="card-title d-flex justify-content-center">
                        Education
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- Nama Sekolah -->
                        <div class="mb-3">
                            <label for="">Nama Sekolah</label>
                            <input value="<?= $roweducation['nama_sekolah'] ?>" type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" id="">
                        </div>
                    
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input value="<?= $roweducation['alamat'] ?>" type="text" class="form-control" name="alamat" placeholder="Alamat" id="">
                        </div>
                        
                        <!-- Tahun Masuk -->
                        <div class="mb-3">
                            <label for="">Tahun Masuk</label>
                            <input value="<?= $roweducation['tahun_masuk'] ?>" type="number" class="form-control" name="tahun_masuk" placeholder="Tahun Masuk" id="">
                        </div>
                    
                        <!-- Tahun Keluar -->
                        <div class="mb-3">
                            <label for="">Tahun Keluar</label>
                            <input value="<?= $roweducation['tahun_keluar'] ?>" type="number" class="form-control" name="tahun_keluar" placeholder="Tahun Keluar" id="">
                        </div>
                    
                        <!-- Button Submit -->
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" name="beducation" value="Simpan">
                            <a href="?pg=education">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Skill -->
            <div class="col col-12">
                <div class="card p-5 mb-2">
                    <div class="card-title d-flex justify-content-center">
                        Skill
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- Nama Skill -->
                        <div class="mb-3">
                            <label for="">Skill 1</label>
                            <input value="<?= $rowSkill['skill_satu'] ?>" type="text" class="form-control" name="skill_satu" placeholder="Nama Skill" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Skill 2</label>
                            <input value="<?= $rowSkill['skill_dua'] ?>" type="text" class="form-control" name="skill_dua" placeholder="Nama Skill" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Skill 3</label>
                            <input value="<?= $rowSkill['skill_tiga'] ?>" type="text" class="form-control" name="skill_tiga" placeholder="Nama Skill" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Skill 4</label>
                            <input value="<?= $rowSkill['skill_empat'] ?>" type="text" class="form-control" name="skill_empat" placeholder="Nama Skill" id="">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" name="bskill" value="Simpan">
                            <a href="?pg=education">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience -->
    <div class="col">
        <div class="card p-5 mb-2">
            <div class="card-title d-flex justify-content-center">
                Experience
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- Nama Sekolah -->
                <div class="mb-3">
                    <label for="">Nama Jabatan</label>
                    <input value="<?= $rowExp['posisi_jabatan'] ?>" type="text" class="form-control" name="posisi_jabatan" placeholder="Nama Sekolah" id="">
                </div>
            
                <!-- Alamat -->
                <div class="mb-3">
                    <label for="">Nama Perusahan</label>
                    <input value="<?= $rowExp['nama_perusahaan'] ?>" type="text" class="form-control" name="nama_perusahaan" placeholder="Alamat" id="">
                </div>
                
                <!-- Tahun Masuk -->
                <div class="mb-3">
                    <label for="">Tahun Masuk</label>
                    <input value="<?= $rowExp['tahun_masuk'] ?>" type="text" class="form-control" name="tahun_masuk" placeholder="Tahun Masuk" id="">
                </div>
            
                <!-- Tahun Keluar -->
                <div class="mb-3">
                    <label for="">Keterangan 1</label>
                    <input value="<?= $rowExp['keterangan_satu'] ?>" type="text" class="form-control" name="keterangan_satu" placeholder="Tahun Keluar" id="">
                </div>
                <div class="mb-3">
                    <label for="">Keterangan 2</label>
                    <input value="<?= $rowExp['keterangan_dua'] ?>" type="text" class="form-control" name="keterangan_dua" placeholder="Tahun Keluar" id="">
                </div>
                <div class="mb-3">
                    <label for="">Keterangan 3</label>
                    <input value="<?= $rowExp['keterangan_tiga'] ?>" type="text" class="form-control" name="keterangan_tiga" placeholder="Tahun Keluar" id="">
                </div>
                <!-- Button Submit -->
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="bexp" value="Simpan">
                    <a href="?pg=education">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>