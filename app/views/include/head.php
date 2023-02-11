<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?= ($this->data['site']['title'] ?? 'null') ?> | <?= ($this->data['page_title'] ?? 'null') ?></title>
  <link rel="icon" type="image/png" href="<?= __BASE_URL__ . '/img/favicon.png' ?>" />
  <meta name="description" content="<?= ($this->data['site']['description'] ?? 'null') ?> " />
  <meta name="keywords" content="<?= ($this->data['site']['keywords'] ?? 'null') ?> " />
  <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9" />
  <meta property="og:image" content="<?= __BASE_URL__ . '/img/thumbnail.png' ?>" />
  <?php $styles = [
    'bootstrap.min.css',
    'style.css',
    'style-responsive.css',
    'animate.min.css',
    'vertical-rhythm.min.css',
    'owl.carousel.css',
    'magnific-popup.css',
    'datatables.min.css'
  ];

  foreach ($styles as $st) { ?>
    <link rel="stylesheet" href="<?= __BASE_URL__ . '/theme/css/' . $st  . '?v=' . time() ?>">
  <?php } ?>



  <script type="text/javascript" src="<?= __BASE_URL__ . '/theme/js/jquery-1.11.2.min.js' ?>"></script>
  <script type="text/javascript" src="<?= __BASE_URL__ . '/theme/js/datatables.min.js' ?>"></script>
  <script type="text/javascript" src="<?= __BASE_URL__ . '/theme/js/clipboard.min.js' ?>"></script>
  <script script src='https://www.google.com/recaptcha/api.js'></script>



  <script>
    window.base_url = '<?= __BASE_URL__ ?>';
    window.user_id = <?= ($_SESSION['user_data']['user_id'] ?? 'null') ?>;
    window.user_email = '<?= $_SESSION['user_data']['user_email'] ?? null ?>';
    window.myModalActive = false;
    window.lang = 'vi';
  </script>


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KX8WKCFQHC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KX8WKCFQHC');
  </script>

  <style>
    .main-nav .inner-nav .mn-sub-multi li a i {
      width: 19px;
    }
  </style>
</head>

<body class="appear-animate">