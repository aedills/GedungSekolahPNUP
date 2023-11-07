<script>
    function updateList() {
        var l1 = document.getElementById('lt1');
        var l2 = document.getElementById('lt2');
        var l3 = document.getElementById('lt3');
        var f1 = document.getElementById('f1');
        var f2 = document.getElementById('f2');

        var lt1 = 'n';
        var lt2 = 'n';
        var lt3 = 'n';
        var fs1 = 'n';
        var fs2 = 'n';

        if (l1.checked) {
            lt1 = 'y';
        }
        if (l2.checked) {
            lt2 = 'y';
        }
        if (l3.checked) {
            lt3 = 'y';
        }
        if (f1.checked) {
            fs1 = 'y';
        }
        if (f2.checked) {
            fs2 = 'y';
        }

        if (lt1 == 'n' && lt2 == 'n' && lt3 == 'n') {
            var target = document.getElementById('roomList');
            target.innerHTML = "<div class='text-center' style='margin-top: 80px;'><h4>Silahkan pilih lantai.</h4></div>";
            return;
        }

        var ajax_url = "<?= base_url('/Ajax/getList/') ?>" + lt1 + "/" + lt2 + "/" + lt3 + "/" + fs1 + "/" + fs2;

        var req = new XMLHttpRequest();
        req.open('GET', ajax_url, true);
        // req.responseType = 'document';
        req.onload = function() {
            var target = document.getElementById('roomList');
            target.innerHTML = req.response;
        }
        req.send();
    }
</script>

<section style="margin-top: 120px;" id="rooms">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title wow fadeInDown" data-wow-duration="200ms">Ruang Tersedia...</h2>
        </div>
        <div class="row">
            <div class="col-md-2 side-bar">
                <ul id="roomfilter" onchange="updateList()">
                    <!-- Filter 1 -->
                    <div>
                        <h2>Lantai...</h2>
                    </div>
                    <li>
                        <input id="lt1" type="checkbox" checked>
                        <label for="lt1">Lantai 1</label>
                    </li>
                    <li>
                        <input id="lt2" type="checkbox" checked>
                        <label for="lt2">Lantai 2</label>
                    </li>
                    <li>
                        <input id="lt3" type="checkbox" checked>
                        <label for="lt3">Lantai 3</label>
                    </li>

                    <!-- Filter 2 -->
                    <div>
                        <i class="fa-sharp fa-regular fa-horizontal-rule"></i>
                        <h2>Fasilitas...</h2>
                    </div>
                    <li>
                        <input id="f1" type="checkbox" class="switch">
                        <label for="f1">AC</label>
                    </li>
                    <li>
                        <input id="f2" type="checkbox" class="switch">
                        <label for="f2">Monitor</label>
                    </li>


                    <!-- filter 3 -->
                    <!-- <li>
                        <input id="r1" type="radio" name="radio" value="1">
                        <label for="r1">Radio</label>
                    </li>
                    <li>
                        <input id="r2" type="radio" name="radio" value="2" checked>
                        <label for="r2">Radio</label>
                    </li> -->
                </ul>
            </div>
            <div class="col-md-10">


                <div class="row">
                    <div class="features" id="roomList">
                        <!-- Room List -->

                    </div>
                </div>

                <script>
                    window.onload = function() {
                        var ajax_url = "<?= base_url('/Ajax/getList/y/y/y/n/n') ?>";

                        var req = new XMLHttpRequest();
                        req.open('GET', ajax_url, true);
                        // req.responseType = 'document';
                        req.onload = function() {
                            var target = document.getElementById('roomList');
                            target.innerHTML = req.response;
                        }
                        req.send();
                    };
                </script>
            </div>
        </div>
    </div>
</section>