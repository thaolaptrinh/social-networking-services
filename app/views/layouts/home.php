<?php $this->render('include/head'); ?>


<div class="page-loader">
  <div class="loader"></div>
</div>

<div class="page-site" id="top">
  <?php $this->render('include/home/nav'); ?>
  <?php $this->render($content); ?>
  <?php $this->render('include/home/footer'); ?>
</div>
<?php $this->render('include/end'); ?>