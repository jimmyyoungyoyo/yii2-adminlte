<?php 
use jimmyyoungyoyo\adminlte\component\MenuGenerate;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=$directoryAsset?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$directoryAsset?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?= MenuGenerate::widget([
            'menu' => [
              ['label' => 'Account', 'icon' => 'fa fa-users', 'url' => '/account/index', 'active' => true],
              ['label' => 'Message', 'icon' => 'fa fa-paper-plane', 'url' => '/message/index', 'active' => false],
              [
                'label' => 'Dashboard',
                'icon' => 'fa fa-tachometer-alt',
                'url' => '#',
                'active' => false,
                'items' => [
                  [
                    'label' => 'example1',
                    'icon' => 'fa fa-users',
                    'url' => '/dashboard/example1',
                    'active' => false,
                  ],
                  [
                    'label' => 'example2',
                    'icon' => 'fa fa-users',
                    'url' => '/dashboard/example2',
                    'active' => false,
                  ],
                  [
                    'label' => 'example3',
                    'icon' => 'fa fa-users',
                    'url' => '/dashboard/example3',
                    'active' => false,
                  ]
                ]
              ],
            ]])
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>