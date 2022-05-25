<nav class="navbar navbar-expand-lg navbar-dark bg-light sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold py-2" href="<?php echo base_url(); ?>Landing">
            <img src="<?php echo base_url(); ?>/assets/img/lambang_kabGianyar.png" alt="" width="45" height="45" class="d-inline-block align-text-top">
        </a>
        <a href="<?php echo base_url(); ?>Landing" class="fw-bold fs-4 text-decoration-none pt-2 text-danger navbar-item">PPDB Gianyar</a>
        <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-item text-danger dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Panduan Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Landing/view_panduan">Panduan & Syarat</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Landing/view_informasi">Informasi SMP</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Landing/view_faq">FAQ</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-item text-danger" aria-current="page" href="<?php echo base_url(); ?>Landing/view_hubungi">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>