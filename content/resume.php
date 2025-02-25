<?php 
    $queryEducation = mysqli_query($koneksi, "SELECT * FROM education");
    $data = mysqli_fetch_assoc(($queryEducation));

    $queryExp = mysqli_query($koneksi, "SELECT * FROM experience");
    $rowExp = mysqli_fetch_assoc(($queryExp));

    $querySkill = mysqli_query($koneksi, "SELECT * FROM skill");
    $rowSkill = mysqli_fetch_assoc(($querySkill));
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Check out the great services we offer</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box ">
                    <div class="icon"><i class="bi bi-book-half"></i></div>
                    <h4 class="title"><a href="">Education</a></h4>
                    <p><?= $data['nama_sekolah'] ?></p>
                    <p><?= $data['alamat'] ?></p>
                    <p><?= $data['tahun_masuk'] . "-" . $data['tahun_keluar'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Experience</a></h4>
                <p class="description font-weight-bold"><?= $rowExp['posisi_jabatan'] ?></p>
                <p class="description font-weight-bold"><?= $rowExp['nama_perusahaan'] ?></p>
                <p class="description font-weight-bold"><?= $rowExp['tahun_masuk'] ?></p>
                <ul>
                    <li><?= $rowExp['keterangan_satu'] ?></li>
                    <li><?= $rowExp['keterangan_dua'] ?></li>
                    <li><?= $rowExp['keterangan_tiga'] ?></li>
                </ul>
                <p class="description font-weight-bold"></p>
                <p class="description font-weight-bold"></p>
                <p class="description font-weight-bold"></p>
            </div>
        </div>
        <div class="col col-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Skill</a></h4>
                <div>
                    <div> 
                        <?= $rowSkill['skill_satu'] ?>
                    </div>
                    <div>
                   
                        <?= $rowSkill['skill_dua'] ?>
                    </div>
                    <div>
                        
                        <?= $rowSkill['skill_tiga'] ?>
                    </div>
                    <div>
                       
                        <?= $rowSkill['skill_empat'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>