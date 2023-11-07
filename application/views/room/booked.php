<?php
function getTime($x){
    $raw = explode(' ', $x);
    $timepart = explode(':', $raw[1]);
    return $timepart[0].':'.$timepart[1];
}
function get_Date($y){
    $sep = explode(' ', $y);
    $raw = explode('-', $sep[0]);
    return $raw[2].'-'.$raw[1].'-'.$raw[0];
}

?>


<div class="container" style="margin-top: 80px;">
    <div class="section-header" style="margin-top: 30px;">
        <h2 class="section-title wow fadeInDown" data-wow-duration="200ms">Daftar Book!</h2>
        <div class="row">
            <div class="features" id="roomList">

                <?php foreach ($bookedData as $field) { ?>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="200ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i style="padding-right: 65px;"><?= $field->no ?></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 20pt;"><?= $field->id ?></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="media-body-text"><?= get_Date($field->time_in) ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="media-body-text"><?= getTime($field->time_in) ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="media-body-text"><?= getTime($field->time_out) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>