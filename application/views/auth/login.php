<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap">
<link rel="stylesheet" href="<?= base_url('assets/vendor/auth/css/auth-style.css') ?>">

<style>
    .hide-arrows::-webkit-inner-spin-button,
    .hide-arrows::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">GEDUNG SEKOLAH - PNUP KAMPUS 1</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image:url(<?= base_url('images/auth-image.jpg') ?>);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Login/Masuk</h3>
                            </div>
                        </div>
                        <form action="<?= base_url('auth/log1n') ?>" method="POST" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label" for="nim">NIM</label>
                                <input type="number" name="nim" class="hide-arrows form-control" placeholder="NIM Anda" value=<?= set_value('nim') ?> required>
                                <?= $this->session->flashdata('nim'); ?>
                                <small class="text-danger"><?= form_error('nim') ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Kata Sandi</label>
                                <input type="password" name="p" class="form-control" placeholder="Kata Sandi Anda" required>
                                <?= $this->session->flashdata('password'); ?>
                                <small class="text-danger"><?= form_error('p') ?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya!<input type="checkbox"><span class="checkmark"></span></label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Lupa kata sandi?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Only For Auth -->
<script src="<?= base_url('assets/vendor/auth/js/auth-main.js') ?>"></script>
<script src="<?= base_url('assets/vendor/auth/js/auth-popper.js') ?>"></script>

<script src=" <?= base_url('assets/js/jquery.js') ?>"></script>
<script src=" <?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src=" <?= base_url('assets/js/mousescroll.js') ?>"></script>
<script src=" <?= base_url('assets/js/smoothscroll.js') ?>"></script>
<script src=" <?= base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
<script src=" <?= base_url('assets/js/jquery.isotope.min.js') ?>"></script>
<script src=" <?= base_url('assets/js/jquery.inview.min.js') ?>"></script>
<script src=" <?= base_url('assets/js/wow.min.js') ?>"></script>
<script src=" <?= base_url('assets/js/custom-scripts.js') ?>"></script>







</body>

</html>