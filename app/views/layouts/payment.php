<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thanh toán hoá đơn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <link rel="icon" type="image/png" href="<?= BASE_URL('img/favicon.png') ?>" />
  <link rel="stylesheet" href="<?= BASE_URL('theme/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?= BASE_URL('public/cute-alert/cute-alert.css') ?>" rel="stylesheet" type="text/css">
  <script src="<?= BASE_URL('public/cute-alert/cute-alert.js') ?>"></script>
  <script src="<?= BASE_URL('public/js/jquery-3.6.0.js') ?>"></script>
  <style type="text/css">
    body {
      width: 100%;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(110deg, rgba(255, 195, 227, 1) 0%, rgba(5, 135, 247, 1) 100%);
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }

    a {
      color: #0e7aea;
      text-decoration: none;
    }

    h6 {
      color: #9aa3ab;
      font-weight: 300;
      line-height: 15px;
    }

    h5 {
      color: #99a1aa;
      font-weight: 300;
    }

    h3 {
      color: #58636a;
      font-weight: 500;
    }



    .container {
      min-height: 456px;
      margin: auto;
      padding-right: 0;
      padding-left: 0;
      margin-top: 0%;
      overflow: hidden;
      border-radius: 5px 5px 5px 5px;
      -webkit-box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 0.2);
      -moz-box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 0.2);
      box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 0.2);
    }

    .info-box {
      margin-left: 25px;
      margin-right: 20px;
      margin-top: 15%;
      min-height: 550px;
      text-align: left;
    }

    .receipt {
      font-weight: 300;
      font-size: 18px;
      line-height: 26px;
      padding-top: 20px;
      padding-bottom: 15px;
      border-bottom: 1px solid #9d1d63;
      height: 15%;
    }

    .receipt>span {
      font-weight: 500;
      font-size: 21px;
    }

    .entry {
      border-bottom: 1px solid #9d1d63;
      height: 15%;
      overflow: hidden;
      padding-top: 15px;
    }

    .entry>div {
      font-weight: 400;
      font-size: 12pt;
      line-height: 26px;
      margin-top: 0px !important;
      float: left;
      padding-bottom: 15px;
    }

    .entry>i {
      margin-top: 4px;
      margin-right: 13px;
      float: left;
      color: #b4d8fc;
    }

    span {
      font-weight: 500;
      font-size: 16px;
    }

    .entry:last-child {
      border-bottom: none;
    }

    .content {
      position: relative;
      background-color: #fff;
      display: block;
      border-radius: 0 5px 5px 0;
      padding: 20px;
    }

    .right {
      padding-left: 0px;
    }

    .header {
      padding-bottom: 15px;
      overflow: hidden;
      border-bottom: 1px solid #d7e2e7;
      text-align: left;
    }

    .header>img {
      width: 100px;
      float: left;
    }

    .header>h4 {
      text-align: right;
      margin-top: 10px;
    }

    .main {
      margin-top: 35px;
    }

    .message>p {
      font-weight: 300;
      font-size: 15px;
      color: #7a838d;
      line-height: 30px;
    }

    .message>h6 {
      margin-top: 10px;
    }

    .footer {
      overflow: hidden;
      border-top: 1px solid #d7e2e7;
      margin: 20px 0;
      padding-top: 30px;
      margin-top: 0px;
    }

    .footer>a {
      font-size: 13px;
      font-weight: 500;
      float: left;
    }

    .footer>h6 {
      color: #7a838d;
      text-align: right;
      margin-top: 0px !important;
    }

    .row-eq-height {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    h1 {
      text-transform: uppercase;
      text-align: center;
      color: black;
      background: -webkit-linear-gradient(60deg, #43cea2, #185a9d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    label {
      /*position: absolute;*/
      /*margin-left: 2px;*/
      /*transform: translateY(150%);*/
      /*color: #777777;*/
      /*transition: all .6s ease;*/
    }

    .mobile-right {
      float: right;
    }

    .otp {
      border-bottom: none;
    }

    input:focus {
      border-bottom-color: #d884b3;
      transform: scale(1.1, 1.1);
      transition: all .6s ease;
      color: black;
    }

    .selected {
      color: #96798b;
      font-size: .8em;
      transform: translateY(10%);
      transition: all .6s ease;
    }

    input[type='number'] {
      -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }

    .left {
      border-radius: 5px 0 0 5px;
      float: left;
    }

    .captcha {
      display: flex;
      /*padding-left: 15%;*/
    }

    .container {
      width: 45%;
      min-width: 800px;
    }

    /*.hidden-web {*/
    /*display: none !important;*/
    /*}*/

    .left {
      background-color: #af206f;
      position: relative;
      padding-right: 0px;
      color: #ffffff;
    }


    .footer-info {
      text-align: left;
      padding-left: 20px;
    }

    .loader {
      top: 30%;
    }

    #rc-imageselect,
    .g-recaptcha {
      transform: scale(0.8);
      -webkit-transform: scale(0.8);
      transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
    }

    @keyframes lds-dual-ring {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-webkit-keyframes lds-dual-ring {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .lds-dual-ring {
      position: relative;
    }

    .lds-dual-ring div {
      position: absolute;
      width: 80px;
      height: 80px;
      top: 60px;
      left: 60px;
      border-radius: 50%;
      border: 8px solid #000;
      border-color: #b0006d transparent #b0006d transparent;
      -webkit-animation: lds-dual-ring 1s linear infinite;
      animation: lds-dual-ring 1s linear infinite;
    }

    .lds-dual-ring {
      width: 200px !important;
      height: 200px !important;
      top: 50%;
      -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
      transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
    }

    .loader {
      position: absolute;
    }

    .scan-qr-code {
      text-align: center;
      color: #af206f;
      padding-top: 25px;
    }

    .qr-code {
      text-align: center;
    }

    .logo-image-size {
      max-width: 270px !important;
      height: 80px;
    }

    .info-qr-code {
      text-align: center;
      color: #101010;
      font-size: 11pt;
    }

    .login_sign_enter {
      text-align: center;
      border-top: 1px #dadada solid;
    }

    .login_sign_enter .enter_line_or {
      font-size: 14px;
      color: #8ba8b4;
      background: #fff;
      padding: 0px 10px;
      position: relative;
      top: -10px;
    }

    a {
      color: #af206f;
      text-decoration: none;
    }

    @media (max-height: 850px) {


      .info-qr-code {
        text-align: center;
        color: #101010;
        font-size: 10pt;
      }

      .btn {
        font-size: 10pt;
      }
    }


    nav.navbar {
      background: none;
      color: black;
      box-shadow: none;
    }

    .logo-pci {
      width: 250px;
    }

    span {
      font-weight: 500;
      font-size: 15px;
    }

    .spinner div {
      width: 5px;
      height: 5px;
      position: absolute;
      left: -20px;
      top: 40px;
      margin-top: 20%;
      background-color: #4285f4;
      border-radius: 50%;
      animation: move 1s infinite cubic-bezier(.2, .64, .81, .23);
    }

    .spinner div:nth-child(2) {
      animation-delay: 150ms;
    }

    .spinner div:nth-child(3) {
      animation-delay: 300ms;
    }

    .spinner div:nth-child(4) {
      animation-delay: 450ms;
    }

    @keyframes move {
      0% {
        left: 35%;
      }

      75% {
        left: 65%;
      }

      100% {
        left: 90%;
      }
    }

    .error {
      font-size: 10pt;
      color: #ff0000;
      font-weight: 400;
    }

    #msg-momo {
      display: none;
    }

    .msg-reg-success {
      background-color: #b2d135;
      border-radius: 3px;
      padding: 10px;
      margin: 10px 0px;
    }

    .msg-reg-success.content {
      align-items: center;
      justify-content: center;
      display: flex;
    }

    .msg-reg-success img {
      align-items: center;
      justify-content: center;
      display: flex;
    }

    #ul-list-source {
      padding: initial;
      margin: 20px;
    }

    .form-group {
      margin-bottom: 0;
    }

    .form-control:focus {
      border-color: #af206f;
    }

    .container {
      width: 40%;
      min-width: 750px;
      text-align: right;
    }

    .nowrap {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }



    @media (min-width: 770px) {
      .hidden-md {
        display: none;
      }
    }

    @media (max-width: 769px) {
      .container {
        width: 40%;
        min-width: 100%;
        min-height: 0px;
        box-shadow: none;
        border-radius: 0px;
      }

      .hidden-xs {
        display: none !important;
      }

      .col-md-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
      }

      .image-qr-code {
        height: 250px;
      }

      .header {
        padding-bottom: 0px;
        overflow: hidden;
        border-bottom: none;
      }

      .info-box-ipad {
        padding-left: 20px;
        background-color: #B0006D;
        color: #ffffff;
        padding: 20px;
        text-align: center;
      }

      .back-merchant {
        width: 100%;
        text-align: center;
        border-top: 1px solid;
        padding-top: 20px;
        margin: 20px 20px 0 20px;
      }

      .logo-pci {
        width: 225px;
      }

      .footer-pci {
        padding-left: 20px;
      }

      .content {
        padding-bottom: 0;
      }

      .scan-qr-code {
        padding-top: 0px;
      }

      .info-footer {
        line-height: 6px;
        padding-top: 20px;
        text-align: right;
        padding-right: 30px;
      }

      .info-box-border {
        border-right: 1px solid;
      }

      .nowrap {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      h5 {
        color: #fff;
      }

      .right {
        padding-left: 15px;
      }

    }

    @media (max-width: 575px) {
      .info-footer {
        text-align: center;
        padding-right: unset;
      }

      .info-box-border {
        border-right: none;
      }
    }

    .container-fluid {
      width: 40% !important;
      min-width: 750px !important;

    }



    .entry {
      border-bottom: 1px solid #424242;
    }

    .left {
      background-color: #262626;
    }

    .receipt {
      border-bottom: 1px solid #424242
    }

    @media (max-width:992px) {
      #logo {
        width: 80%;
      }

      #inner_payment {
        display: block !important;
      }
    }
  </style>
</head>

<body>
  <div class="spinner" id="spinner">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <div id="page" style="display: none;">
    <div class="container">
      <div class="row" id="inner_payment" style="display: flex; justify-content: stretch;">
        <div class="col-xs-12 col-sm-12 col-md-4 left">
          <div class="info-box">
            <div class="receipt">
              <img id="logo" src="<?= BASE_URL('img/logo.png') ?>" width="100%" />
            </div>
            <div class="entry">
              <p><i class="fa fa-university" aria-hidden="true"></i>
                <span style="padding-left: 5px;"><?= $method_name ?></span>

              </p>
            </div>
            <div class="entry">
              <p><i class="fa fa-credit-card" aria-hidden="true"></i>
                <span style="padding-left: 5px;">Số tài khoản</span>
                <br />
                <b id="copyStk" style="padding-left: 25px;word-break: keep-all;color:greenyellow;"><?= $account_number ?></b>
                <i onclick="copy()" data-clipboard-target="#copyStk" class="fas fa-copy copy"></i>
              </p>
            </div>
            <div class="entry">
              <p><i class="fa fa-user" aria-hidden="true"></i>
                <span style="padding-left: 5px;">Chủ tài khoản</span>
                <br />
                <span style="padding-left: 25px;word-break: keep-all;"><?= $account_name ?></span>
              </p>
            </div>
            <div class="entry">
              <p><i class="fa fa-money" aria-hidden="true"></i>
                <span style="padding-left: 5px;">Số tiền cần thanh toán</span>
                <br />
                <b style="padding-left: 25px;color:aqua;"><?= $payment_amount ?></b>
              </p>
            </div>
            <div class="entry">
              <p><i class="fa fa-comment" aria-hidden="true"></i>
                <span style="padding-left: 5px;">Nội dung chuyển khoản</span>
                <br />
                <b id="copyNoiDung" style="padding-left: 25px;word-break: keep-all;color:yellow;"><?= $payment_code ?></b>
                <i onclick="copy()" data-clipboard-target="#copyNoiDung" class="fas fa-copy copy"></i>
              </p>
            </div>
            <div class="entry">
              <p><i class="fa fa-barcode" aria-hidden="true"></i>
                <span style="padding-left: 5px;">Trạng thái
                </span>
                <br />
                <i class="fa fa-spinner fa-spin"></i><span id="status_payment" style="padding-left: 25px;word-break: break-all;">Đang tìm dữ liệu...</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 right">
          <div class="content">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="message">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="qr-code">
                        <div class="payment-cta">
                          <div>
                            <h2>Quét mã QR để thanh toán</h2>
                          </div>
                          <a><?= $title ?></a>
                        </div>
                        <img src="<?= $qr_code ?>" width="100%" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid hidden-xs">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="copyrights text-center">
            <p style="color: #333;   font-size: 11pt; font-weight: bold;">
              <br />
              Vui lòng thanh toán vào thông tin tài khoản trên để hệ thống xử lý hoá đơn tự động.
            </p>
            <a href="<?= BASE_URL('balance') ?>">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span>Quay Lại</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?= BASE_URL('theme/js/bootstrap.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#page').show();
      $('#spinner').hide();
      $("img.lazy").show().lazyload();
    });
  </script>
  <script type="text/javascript">
    function getStatusInvoice() {
      $.ajax({
        url: "<?= BASE_URL('payment')  ?>",
        type: "GET",
        dataType: "JSON",
        data: {
          'action': 'status',
          'code': "<?= $_GET['code'] ?>"
        },
        success: function(data) {
          if (data.return == 1) {
            setTimeout("location.href = '<?= BASE_URL('balance') ?>';", 3000);
          }
          const type = {
            Pending: {
              style: 'warning',
              value: 'Đang chờ thanh toán'
            },
            Canceled: {
              style: 'warning',
              value: 'Hóa đơn đã hết hạn'
            },
            Completed: {
              style: 'success',
              value: 'Thanh toán hóa đơn thành công'
            },

          };
          $('#status_payment').html(`<span class="text-${type[data.status].style}">${type[data.status].value}</span>`);
        }
      });
    }
    setInterval(function() {
      $('#status_payment').load(getStatusInvoice());
    }, 5000);
    new ClipboardJS(".copy");

    function copy() {
      cuteToast({
        type: "success",
        message: "Đã sao chép vào bộ nhớ tạm",
        timer: 5000
      });
    }
  </script>
</body>

</html>