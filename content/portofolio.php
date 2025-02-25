<?php
    $queryProject = mysqli_query($koneksi, "SELECT * FROM project ORDER BY id");
?>
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check out our beautifull portfolio</p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
        </ul>
        </div>
    </div>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php while ($rowProject = mysqli_fetch_assoc($queryProject)) : ?>     
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="admin/upload/<?= $rowProject['foto'] ?>" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="asset/fe/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4><?= $rowProject['nama_project'] ?></h4>
                        <p><?= $rowProject['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile ?>

    </div>
</div>