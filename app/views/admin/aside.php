<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= __BASE_URL__ . '/admin' ?>" class="brand-link">
    <center> <img width="100%" src="" alt="LOGO"></center>
  </a>
  <div class="sidebar">

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php global $aside_admin;


        if (!empty($aside_admin)) {
          foreach ($aside_admin as $item) {
        ?>
            <li class="nav-item">
              <a href="<?= !empty($item['path']) ?  $item['path'] : '#' ?>" class="nav-link">
                <i class="nav-icon <?= $item['icon'] ?>"></i>
                <p>
                  <?= $item['name']  ?>
                  <?= !empty($item['sub_nav']) ? '<i class="fas fa-angle-left right"></i>' : '' ?>
                </p>
              </a>

              <?php if (!empty($item['sub_nav'])) {
              ?>
                <ul class="nav nav-treeview">

                  <?php
                  foreach ($item['sub_nav'] as $sub) {
                  ?>
                    <a href="<?= __BASE_URL__ . $sub['path'] ?>" class="nav-link">
                      <i class="<?= $sub['icon'] ?> nav-icon"></i>
                      <p><?= $sub['name'] ?></p>
                    </a>
                  <?php } ?>
                </ul>
              <?php } ?>
            </li>
        <?php }
        } ?>
      </ul>
    </nav>
  </div>
</aside>