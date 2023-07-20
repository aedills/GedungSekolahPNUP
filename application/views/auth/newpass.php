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
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image:url(<?= base_url('images/auth-image.jpg') ?>);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Login berhasil.<br>Anda login untuk pertama kalinya, silahkan buat sandi baru.</h3>
                            </div>
                        </div>
                        <form action="<?= base_url('auth/setp') ?>" method="POST" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label" for="new_pass">Kata Sandi Baru</label>
                                <input id="inA" type="password" name="new_pass" class="hide-arrows form-control" placeholder="Kata Sandi Baru" required>
                                <?= $this->session->flashdata('a_pas'); ?>
                                <small class="text-danger"><?= form_error('a_pas') ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Konfirmasi Kata Sandi</label>
                                <input id="inB" type="password" name="p" class="form-control" placeholder="Konfirmasi Kata Sandi Anda" required>
                                <?= $this->session->flashdata('password'); ?>
                                <small class="text-danger"><?= form_error('p') ?></small>
                            </div>
                            <div class="form-group">
                                <button disabled id="savepass" type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan Sandi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var inA = document.getElementById("inA");
    var inB = document.getElementById("inB");
    var save = document.getElementById("savepass");

    inA.addEventListener("input", passCheck);
    inB.addEventListener("input", passCheck);

    function passCheck() {
        var p1 = inA.value;
        var p2 = inB.value;

        if (p1 === p2) {
            if(p1 != '' || p2 != ''){
                save.removeAttribute("disabled");
            }
            else{
                save.setAttribute("disabled", "disabled");
            }
        } 
        else {
            save.setAttribute("disabled", "disabled");
        }
    }
</script>

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