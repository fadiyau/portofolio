<?php 
    $queryAbout = mysqli_query($koneksi, "SELECT * FROM about");
    $data = mysqli_fetch_assoc(($queryAbout));
?>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="asset/fe/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Self Introduction</h3>
            <p data-aos="fade-up" data-aos-delay="100">
                <?= $data['perkenalan'] ?>
            </p>
            <div data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Background</h4>
                <p><?= $data['latar_belakang'] ?></p>
            </div>
        </div>
    </div>
</div>