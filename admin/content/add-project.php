<?php 
    if (isset($_POST['simpan'])) {
        // $_FILLES 
        $nama_project = $_POST ['nama_project'];
        $description =  $_POST['description'];
        $foto =  $_FILES['foto']['name'];   
        $size =  $_FILES['foto']['size'];
        
        $ekstensi = array('png', 'jpg', 'jpeg');
        $ext = pathinfo($foto, PATHINFO_EXTENSION);

        if (!in_array($ext, $ekstensi)) {
            echo "Mohon maaf masukkan ekstensi berupa png, jpg dan jpeg";
        }
        else{
            move_uploaded_file($_FILES["foto"]["tmp_name"], 'upload/' .$foto);

            $insert = mysqli_query($koneksi, "INSERT INTO project (nama_project, description, foto) VALUES ('$nama_project','$description','$foto')");
            if(!$insert){
                echo "Gagal";
                // header("location:?pg=tambah-project&pesan=tambah-gagal");
            }
            else{
                header("location:index.php?pg=project&pesan=tambah-berhasil");
            }
        }
        
        // MASUKKAN KE DALAM TABLE project (FIELD YANG AKAN DIMASUKKAN)
        // VALUES (INPUTAN MASING-MASING KOLOM)
    }   

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
    
        $edit = mysqli_query($koneksi,"SELECT * FROM project WHERE id = '$id'");
        $rowEdit = mysqli_fetch_assoc($edit);
    }
    if(isset($_POST['edit'])){
        $nama_project = $_POST['nama_project'];
        $description = $_POST['description'];
        $foto = $_FILES['foto']['name'];
        $size =  $_FILES['foto']['size'];
        
        $ekstensi = array('png', 'jpg', 'jpeg');
        $ext = pathinfo($foto, PATHINFO_EXTENSION);
        $id = $_GET['edit'];
        if (!in_array($ext, $ekstensi)) {
            echo "Mohon maaf masukkan ekstensi berupa png, jpg dan jpeg";
        }
        else{
            unlink('upload/' . $rowEdit['foto']);
            move_uploaded_file($_FILES["foto"]["tmp_name"], 'upload/' .$foto);
                 
            $update = mysqli_query($koneksi, "UPDATE project SET nama_project='$nama_project', description='$description', foto='$foto' WHERE id='$id'");
            header("location:?pg=project&update=berhasil");
        }
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Nama Project</label>
        <input type="text" required value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_project'] : '' ?>" class="form-control" placeholder="Masukkan Nama Project" name="nama_project" id="">
    </div>
    <div class="mb-3">
        <label for="">Description</label>
        <input type="description" required value="<?php echo isset($_GET['edit']) ? $rowEdit['description'] : '' ?>" class="form-control" placeholder="Masukkan description" name="description" id="">
    </div>
    <div class="mb-3">
        <label for="">Foto</label>
        <input type="file" required name="foto" id="" >
    </div>
    <div class="mb-3">
        <!-- <label for="">Nama Lengkap</label> -->
        <input type="submit" class="btn btn-primary mr-2" value="<?php echo isset($_GET['edit']) ? 'Edit' : 'Simpan' ?>" id="" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" >
        <a href="?pg=project">Kembali</a>
    </div>
</form>