<nav class="main-nav small-height" style="background-image: url('<?= __BASE_URL__ . '/img/merry.png' ?>');background-size: 130px ;background-repeat: no-repeat;">
  <div class="full-wrapper relative clearfix">
    <div class="nav-logo-wrap local-scroll">
      <a href="<?= __BASE_URL__ ?>" class="logo small-height"><img src="<?= __BASE_URL__ . '/img/logo.png' ?>" alt="logo"></a>
    </div>
    <div class="mobile-nav">
      <i class="fa fa-bars"></i>
    </div>

    <div class="inner-nav desktop-nav">

      <ul class="clearlist">

        <?php if ($this->data['nav'] ?? null) {

          if ($this->data['nav_user'] ?? null) { ?>

            <li>
              <a class="mn-has-sub copy-api"> 🎅 <?= ($_SESSION['user_data']['user_username'] ?? null) ?> <span class="caret"></span></a>
              <ul class="mn-sub mn-has-multi">
                <li class="mn-sub-multi">
                  <ul>
                    <a href="javascript:void(0)" style="text-align:center; background: #383838;" ;>
                      Status: <span class="label label-primary">User</span>
                    </a>

                    <?php foreach ($this->data['nav_user'] as $row) {
                      extract($row); ?>

                      <li>
                        <a href="<?= $path ?>" style="text-transform: uppercase"><i class="<?= $icon ?>"></i> <?= $name ?> </a>
                      </li>

                    <?php } ?>
                  </ul>
                </li>
              </ul>
            </li>
            <?php foreach ($this->data['nav'] as $row) {
              extract($row); ?>
              <li>
                <a href="<?= __BASE_URL__ . '/' . $path ?>">
                  <i class="<?= $icon ?>" style="<?= $path == 'balance' ? 'color: gold;' : '' ?>"></i>
                  <?= $path == 'balance' ? '<b id="user-balance">' . $name . '</b>' : $name ?>
                </a>
              </li>
            <?php } ?>
          <?php } else { ?>

            <?php foreach ($this->data['nav'] as $row) {
              extract($row); ?>
              <li>
                <a href="<?= __BASE_URL__ . '/' . $path ?>"><i class="<?= $icon ?>"></i> <?= $name ?></a>
              </li>
            <?php } ?>
        <?php }
        } ?>





        <li><a href="javascript:void(0)" title="Vietnamese" class="language_select" data-id="1">
            <img src="<?= __BASE_URL__ . '/theme/img/flags/vn.svg.png' ?>" /></a></li>
      </ul>
    </div>
  </div>
</nav>