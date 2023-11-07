<?php

// echo '<pre>'; print_r($list); echo '</pre>'; // die();

?>

<?php foreach ($list as $room) { if($room->full == 1){ continue; } ?>
    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="200ms" data-wow-delay="0ms">
        <a href="<?= base_url('main/book/').$room->no ?>" style="text-decoration: none; color: black;" <?php if($room->status == 'UNAVAILABLE'){ echo $disabled; } ?>>
            <div class="media service-box">
                <div class="pull-left">
                    <i style="padding-right: 65px;"><?= substr($room->id, 3, 3) ?></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading" style="font-size: 20pt;"><?= $room->id ?></h4>
                    <p class="media-body-text <?= strtolower($room->status) ?>"><i class="<?php if ($room->status == 'AVAILABLE') { echo $status['available']; } else { echo $status['unavailable']; } ?>"> <?= $room->status ?></i></p>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <p class="media-body-text"><?php if($room->ac == 1){ echo 'AC'; } ?></p> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <p class="media-body-text"><?php if($room->monitor == 1){ echo 'Monitor'; } ?></p> -->
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
<?php } ?>