<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5">Sistem Informasi Manajemen Aset</h2>
<!-- card untuk pilih ruangan -->
<div class="row justify-content-center g-3">
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <!-- source :https://www.pexels.com/photo/stack-of-books-in-shelf-256559/ -->
            <img src="/img/pexels-pixabay-256559.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Daftar Inventaris Ruangan</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                <a href="/Inventarisasi/pindah" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pindah Ruangan</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- <a href='https://www.freepik.com/free-photos-vectors/people'>People vector created by pch.vector - www.freepik.com</a> -->
<!-- JavaScript Bundle with Popper -->
<?= $this->endSection(); ?>