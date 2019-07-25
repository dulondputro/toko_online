<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider1.jpg'); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider2.jpg'); ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider1.jpg'); ?>" alt="Third slide">
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
    <!-- Content Row -->
    <div class="row text-center mt-3">
        <!-- Pending Requests Card Example -->
        <?php foreach ($barang as $brg) : ?>
            <div class="col-xl-3 col-sm-12 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url() . '/uploads/' . $brg->gambar; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title"><?= $brg->nama_brg ?></h6>
                        <small><?= $brg->keterangan ?></small><br>
                        <span class="badge badge-pill badge-success mb-3">Rp. <?= $brg->harga ?></span><br>
                        <a href="" class="btn btn-sm btn-primary "> Tambah ke Keranjang</a>
                        <a href="" class="btn btn-sm btn-success "> Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->