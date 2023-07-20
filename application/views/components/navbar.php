<header id="header">
    <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>"><img src=" <?= base_url('images/icon/mygs-black.png') ?>" width="100px" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll <?php if($location == 'home'){ echo 'active'; } ?>"><a href="<?= base_url('main') ?>">Home</a></li>
                    <li class="scroll <?php if($location == 'allrooms'){ echo 'active'; } ?>"><a href="<?= base_url('main/allRooms') ?>">All Rooms</a></li>
                    <li class="scroll <?php if($location == 'booked'){ echo 'active'; } ?>"><a href="<?= base_url('main/booked') ?>">Booked</a></li>
                    <li class="scroll"><a href="<?= base_url('auth/logout') ?>"><img class="logout-icon" src="<?= base_url('images/icon/logout.png') ?>" alt=">">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .logout-icon{
            width: 10px;
            padding-bottom: 2px;
            margin-right: 2px;
        }
    </style>
</header>