<?php
    // include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM project ORDER BY id DESC");

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $foto = mysqli_query($koneksi, "SELECT * FROM project WHERE id='$id'");
        $rowFoto = mysqli_fetch_assoc($foto);

        unlink('upload/' . $rowFoto['foto']);
        $delete = mysqli_query($koneksi, "DELETE FROM project WHERE id = '$id'");
        header('location:?pg=project&hapus=berhasil');
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class=" mb-3 d-flex justify-content-end">
    <a href="?pg=add-project" class="btn btn-sm btn-success"><i class="bi bi-plus"></i></a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_project'] ?></td>
                <td><?php echo $row['description'] ?></td> 
                <td>
                    <img src="upload/<?php echo $row['foto'] ?>" alt="">
                </td>
                <td>
                    <a href="?pg=add-project&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a> 
                    <a href="?pg=project&delete=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php endwhile?>
    </tbody>    
</table>