<section id="hero-banner">
    <div class="banner-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Booking Now, <b>STUDY NOW</b></h2>
                    <p>Nikmati kemudahan dalam mencari ruang kelas, <br />semua hanya dalam sekali klik.</p>
                    <a class="btn btn-primary btn-lg" href="<?= base_url('main/allRooms') ?>">Cari Ruang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// echo '<pre>'; print_r($listRoom); echo '</pre>'; // die();
?>
<section style="margin-top: 60px;" id="rooms">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title wow fadeInDown" data-wow-duration="200ms">Ruang Tersedia...</h2>
        </div>

        <div class="row">
            <div class="features">
                <!-- Loop for Rooms -->
                <?php foreach ($listRoom as $room) { ?>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="200ms" data-wow-delay="0ms">
                        <a href="<?= base_url('main/book/').$room->no ?>" style="text-decoration: none; color: black;" <?php if($room->status == 'UNAVAILABLE'){ echo $disabled; } ?>>

                            <div class="media service-box">
                                <div class="pull-left">
                                    <i style="padding-right: 65px;"><?= substr($room->id, 3, 3) ?></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" style="font-size: 20pt;"><?= $room->id ?></h4>
                                    <p class="media-body-text <?= strtolower($room->status) ?>"><i class="<?php if($room->status == 'AVAILABLE'){ echo $status['available']; } else { echo $status['unavailable']; } ?>"> <?= $room->status ?></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="center-container">
            <a href="<?= base_url('main/allRooms') ?>"><button class="btn btn-primary">Lihat Semua</button></a>
        </div>
    </div>


    <div style="margin-top: 80px; color: white;">
        <section class="section-fullbg">
            <div class="container" data-animation-effect="fadeIn" style="padding-bottom: 60px;">
                <h1 id="services" class="title text-center">Keunggula Kami</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="media block-list">
                            <div class="media-left">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Online Based</h3>
                                <blockquote>
                                    <p>Sistem berjalan pada layanan online, sehingga dapat melayani Anda dimanapun dan kapanpun hanya melalui koneksi internet.</p>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media block-list">
                            <div class="media-left">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Databases</h3>
                                <blockquote>
                                    <p>Pusat informasi dan data bersumber dari database, sehingga data terjamin aman dan mudah dikelola.</p>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media block-list">
                            <div class="media-left">
                                <!-- <i class="fa fa-face-sunglasses"></i> -->
                                <i class="fa fa-face-smile"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Easy To Use</h3>
                                <blockquote>
                                    <p>User interface dirancang mudah untuk digunakan, bahkan untuk pengguna awam sekalipun.</p>

                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</section>

<section id="contact-us" style="margin-top: 40px;">
    <div class="container">
        <div class="section-header" data-wow-duration="200ms">
            <h2 class="section-title wow fadeInDown">Hubungi Kami</h2>
            <p class="wow fadeInDown">Berikaan saran dan kritikan Anda kepada developer agar kami dapat memperbaiki dan meningkatkan <br> kualitas layana pada MyGS PNUP.</p>
        </div>
    </div>
</section>

<section id="contact">

    <div class="container">
        <div class="container contact-info">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="contact-form">
                        <h3>Contact</h3>

                        <address>
                            <strong>MyGS PNUP.</strong><br>
                            Kampus 1 PNUP<br>
                            Jln. Perintis Kemerdekaan KM.10 Tamalanrea, Makassar 90245<br>
                            <i class="fa fa-phone"></i> +62 (411) 585365
                        </address>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8">
                    <div class="contact-form">

                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Pesan Anda" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>