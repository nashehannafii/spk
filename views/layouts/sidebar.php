<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Waroeng</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Moch. Nasheh Annafii</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    // [
                    //     'label' => 'Starter Pages',
                    //     'icon' => 'tachometer-alt',
                    //     'badge' => '<span class="right badge badge-info">2</span>',
                    //     'items' => [
                    //         ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    //         ['label' => 'Inactive Page', 'iconStyle' => 'far', 'badge' => '<span class="right badge badge-danger">1</span>'],
                    //     ]
                    // ],
                    ['label' => 'Dashboard', 'icon' => 'th', 'url' => ['site/index']],
                    ['label' => 'MFEP Method', 'icon' => 'book', 'url' => ['site/mfep']],
                    ['label' => 'Rekomendasi Barang', 'icon' => 'star', 'url' => ['barang-tabel/rekomendasi'], 'badge' => '<span class="right badge badge-danger">1</span>'],
                    ['label' => 'Bobot', 'header' => true],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Penjualan',  'icon' => 'home', 'url' => ['kriteria-tabel/jual']],
                    ['label' => 'Keuntungan', 'icon' => 'edit', 'url' => ['kriteria-tabel/untung']],
                    ['label' => 'Harga', 'icon' => 'list', 'url' => ['kriteria-tabel/harga']],
                    // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    // ['label' => 'Level1'],
                    // [
                        //     'label' => 'Level1',
                        //     'items' => [
                    //         ['label' => 'Level2', 'iconStyle' => 'far'],
                    //         [
                        //             'label' => 'Level2',
                        //             'iconStyle' => 'far',
                        //             'items' => [
                            //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle', 'target' => '_blank'],
                            //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                            //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                            //             ]
                            //         ],
                    //         ['label' => 'Level2', 'iconStyle' => 'far']
                    //     ]
                    // ],
                    // ['label' => 'Level1'],
                    ['label' => 'Input Data', 'header' => true],
                    ['label' => 'Barang', 'icon' => 'file', 'url' => ['barang-tabel/index']],
                    // ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    // ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    // ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>