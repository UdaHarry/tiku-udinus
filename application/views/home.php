
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/julien-unsplash.png" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/jeremyd-unsplash.png" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/karen-unsplash.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row mt-3">
    <marquee><h3><p class="badge badge-info">Harga Rp 60.000,00/ tiket setiap hari</p></h3></marquee>
</div>

<div class="row">
    <?php foreach($movie as $film) : ?>
    <div class="col-sm m-4">
        
    <form action="<?= base_url(); ?>home/pesan" method="post">
        <div class="card" style="width: 14rem;">
            <div class="col-md-8 mx-auto p-2">
                <img class="card-img-top img-fluid" src="<?= base_url(); ?>assets/img/<?= $film['foto']; ?>">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $film['judul']; ?></h5>
                <p class="card-text text-truncate"><?= $film['sinopsis']; ?></p>
                <small><?php echo $film['keterangan']; ?></small>

                <button type="submit" name="id_film" value="<?= $film['id_film']; ?>" class="btn btn-primary btn-sm float-right">Pesan Tiket!</button type=>
            </div>
        </div>
    </form>
    
    </div>
    <?php endforeach; ?>
</div>