<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Tentang Kami</h2>

<!-- container untuk nama kontributor -->
<div class="container d-flex justify-content-center ">
    <div class="col-12 col-lg-5">

        <div class="card border-0 shadow mb-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/user-svgrepo-com.svg" class="img-fluid rounded-start mx-1 my-1 " alt="...">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Naufal Haidar Rauf</h5>
                        <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                        <p class="card-text"> Temukan saya di :</p>

                        <!-- social media link -->
                        <p class="card-text">
                            <!-- github -->
                            <button class="btn btn-dark me-2">Github
                                <a href="https://github.com/naufalHaidar12342">
                                    <i class="bi bi-github"></i>
                                </a>
                            </button>

                            <button class="btn btn-dark ms-1 me-2">
                                Telegram
                                <!-- telegram -->
                                <a href="https://t.me/fabiyudzaky" class="">
                                    <i class="bi bi-telegram"></i>
                                </a>
                            </button>

                        </p>


                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Fauzan abiyyu dzaky -->
        <div class="card border-0 shadow mb-3 mt-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/user-svgrepo-com.svg" class="img-fluid rounded-start mx-1 my-1 " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Fauzan Abiyyu Dzaky</h5>
                        <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                        <p class="card-text"> Temukan saya di :</p>

                        <p class="card-text">
                            <!-- github -->
                            <button class="btn btn-dark me-2">Github
                                <a href="https://github.com/fabiyudzaky">
                                    <i class="bi bi-github"></i>
                                </a>
                            </button>

                            <button class="btn btn-dark ms-1 me-2">
                                Telegram
                                <!-- telegram -->
                                <a href="https://t.me/fabiyudzaky" class="">
                                    <i class="bi bi-telegram"></i>
                                </a>
                            </button>

                        </p>

                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- teknologi yang digunakan -->
<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Teknologi yang digunakan</h2>

<!-- container untuk card nantinya -->
<div class="container d-flex flex-column align-items-center ">
    <div class="row d-flex justify-content-between flex-row mb-4 ">
        <!-- kolom kiri -->
        <div class="col-5">
            <!-- card milik PHP -->
            <div class="card m-auto pb-4 shadow" style="width: 24rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" class="card-img-top" alt="...">
                <div class="card-body pb-2">
                    <p class="card-text">
                        Courtesy: Wikipedia

                    </p>
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text fst-italic">
                        Kepanjangan dari PHP: Hypertext Processor (computer science pun).
                    </p>
                    <p class="card-text fst-italic">
                        Bahasa pemrograman yang biasa digunakan dalam pembuatan website.
                    </p>

                    <!-- button untuk mempelajari lebih lanjut tentang teknologi yang di dalam card -->
                    <a href="https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6" class="btn btn-primary text-light" rel="Web Programming UNPAS - Intro PHP">
                        Pelajari lebih lanjut
                    </a>


                </div>
            </div>

        </div>

        <!-- kolom kanan -->
        <div class="col-5">
            <div class="card m-auto pb-4 shadow" style="width: 24rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/PhpMyAdmin_logo.svg/2560px-PhpMyAdmin_logo.svg.png" class="card-img-top" alt="...">
                <div class="card-body pb-2">
                    <p class="card-text">
                        Courtesy: Wikipedia

                    </p>
                    <h5 class="card-title">PhpMyAdmin</h5>
                    <p class="card-text fst-italic">
                        Perangkat lunak berbasis web yang digunakan untuk mengelola SQL database (MySQL,MariaDB).
                    </p>
                    <p class="card-text fst-italic">
                        Biasa disebut GUI Database
                    </p>

                    <!-- button untuk mempelajari lebih lanjut tentang teknologi yang di dalam card -->
                    <a href="https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6" class="btn btn-primary text-light" rel="Web Programming UNPAS - Intro PHP">
                        Pelajari lebih lanjut
                    </a>

                </div>
            </div>


        </div>
    </div>
    <div class="row d-flex justify-content-between flex-row mb-4 mt-2">
        <!-- kolom kiri -->
        <div class="col-5">
            <!-- card milik PHP -->
            <div class="card m-auto pb-4 shadow" style="width: 24rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" class="card-img-top" alt="...">
                <div class="card-body pb-2">
                    <p class="card-text">
                        Courtesy: Wikipedia

                    </p>
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text fst-italic">
                        Kepanjangan dari PHP: Hypertext Processor (computer science pun).
                    </p>
                    <p class="card-text fst-italic">
                        Bahasa pemrograman yang biasa digunakan dalam pembuatan website.
                    </p>

                    <!-- button untuk mempelajari lebih lanjut tentang teknologi yang di dalam card -->
                    <a href="https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6" class="btn btn-primary text-light" rel="Web Programming UNPAS - Intro PHP">
                        Pelajari lebih lanjut
                    </a>


                </div>
            </div>

        </div>

        <!-- kolom kanan -->
        <div class="col-5">
            <div class="card m-auto pb-4 shadow" style="width: 24rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/PhpMyAdmin_logo.svg/2560px-PhpMyAdmin_logo.svg.png" class="card-img-top" alt="...">
                <div class="card-body pb-2">
                    <p class="card-text">
                        Courtesy: Wikipedia

                    </p>
                    <h5 class="card-title">PhpMyAdmin</h5>
                    <p class="card-text fst-italic">
                        Perangkat lunak berbasis web yang digunakan untuk mengelola SQL database (MySQL,MariaDB).
                    </p>
                    <p class="card-text fst-italic">
                        Biasa disebut GUI Database
                    </p>

                    <!-- button untuk mempelajari lebih lanjut tentang teknologi yang di dalam card -->
                    <a href="https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6" class="btn btn-primary text-light" rel="Web Programming UNPAS - Intro PHP">
                        Pelajari lebih lanjut
                    </a>

                </div>
            </div>


        </div>
    </div>
</div>





<?= $this->endSection(); ?>