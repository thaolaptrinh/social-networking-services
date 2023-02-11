<!-- DEVELOPER BY CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Settings</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/dist/css/adminlte.min.css">


  <!-- Cute Alert -->
  <link class="main-stylesheet" href="https://dvmxh2.cmsnt.site/public/cute-alert/style.css" rel="stylesheet" type="text/css">
  <script src="https://dvmxh2.cmsnt.site/public/cute-alert/cute-alert.js"></script>
  <!-- Sweet Alert css-->
  <link href="https://dvmxh2.cmsnt.site/public/sweetalert2/default.css" rel="stylesheet" type="text/css" />
  <!-- Sweet Alerts js -->
  <script src="https://dvmxh2.cmsnt.site/public/sweetalert2/sweetalert2.js"></script>

  <!-- JQVMap -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/jqvmap/jqvmap.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/summernote/summernote-bs4.css">
  <!-- Sparkline -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/sparklines/sparkline.js"></script>
  <!-- CodeMirror -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/theme/monokai.css">

  <!-- jQuery -->
  <script src="https://dvmxh2.cmsnt.site/public/js/jquery-3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- ckeditor -->
  <script src="https://dvmxh2.cmsnt.site/public/ckeditor/ckeditor.js"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="https://dvmxh2.cmsnt.site/admin/home">Dashboard</a></li>
                <li class="breadcrumb-item active">Settings</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-12">
              <div class="card card-dark card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">THÔNG TIN CHUNG</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#tab-notification" role="tab" aria-controls="tab-notification" aria-selected="false">THÔNG BÁO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#tab-auto-bank" role="tab" aria-controls="tab-auto-bank" aria-selected="false">BANK AUTO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#tab-auto-momo" role="tab" aria-controls="tab-auto-bank" aria-selected="false">MOMO AUTO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#tab-nap-the" role="tab" aria-controls="tab-nap-the" aria-selected="false">NẠP THẺ AUTO</a>
                    </li>

                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                      <form action="" method="POST">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" name="title" value="CMSNT.CO" placeholder="VD: CMSNT.CO">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Description</label>
                              <input type="text" class="form-control" name="description" value="" placeholder="VD: Hệ thống bán mã nguồn website MMO uy tín">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Keywords</label>
                              <input type="text" class="form-control" name="keywords" value="" placeholder="VD: cmsnt, bán code, source code mmo">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Author</label>
                              <input type="text" class="form-control" name="author" value="CMSNT.CO" placeholder="VD: CMSNT">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Copyright</label>
                              <textarea class="form-control" name="copyright"></textarea>
                            </div>
                          </div>


                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control select2bs4" name="status">
                                <option selected value="1">ON
                                </option>
                                <option value="0">
                                  OFF
                                </option>
                              </select>
                              <i>Chọn OFF website sẽ bật chế độ bảo trì, ADMIN truy cập bình
                                thường.</i>
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label>Status Captcha</label>
                              <select class="form-control select2bs4" name="status_captcha">
                                <option value="1">ON
                                </option>
                                <option selected value="0">
                                  OFF
                                </option>
                              </select>
                              <i>Chọn OFF website sẽ tắt Captcha chống SPAM</i>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Thời gian lưu phiên đăng
                                nhập</label>
                              <input type="number" class="form-control" name="session_login" value="10000000" placeholder="Nhập thời gian lưu phiên đăng nhập">
                              <i>Tính bằng giây (10000000 =
                                4 tháng)</i>
                            </div>
                          </div>


                          <div class="col-lg-12">
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Script Header</label>
                              <textarea id="codeMirrorDemo" placeholder="Chứa code live chat hoặc jquery trang trí..." name="javascript_header">

                              </textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Script Footer</label>
                              <textarea id="codeMirrorDemo2" placeholder="Chứa code live chat hoặc jquery trang trí..." name="javascript_footer"></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Thông báo ngoài trang chủ</label>
                              <textarea id="notice_home" name="notice_home">
                                </textarea>
                            </div>
                          </div>
                        </div>
                        <button name="SaveSettings" class="btn btn-info btn-icon-left m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-notification" role="tabpanel" aria-labelledby="tab-notification">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label>Loại thông báo</label>
                          <select class="form-control select2bs4" name="type_notification">
                            <option selected value="telegram">Telegram
                            </option>
                            <option value="gmail">Gmail
                            </option>
                          </select>
                          <i>Hệ thống sẽ gửi thông báo khi có đơn hàng mới.</i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Token Telegram (<a target="_blank" href="https://cmsnt.vn/2022/05/huong-dan-cau-hinh-bot-thong-bao-qua-telegram/">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="token_telegram" value="5343530732:AAFpurxSKW9vG" placeholder="5323330732:AAFpurxAdW9vGGPE_cZ2gU_kDP-__kAsOVc">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Chat ID Telegram (<a target="_blank" href="https://cmsnt.vn/2022/05/huong-dan-cau-hinh-bot-thong-bao-qua-telegram/">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="chat_id_telegram" value="-788322" placeholder="-788267800">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nội dung thông báo</label>
                          <textarea name="text_notification" class="form-control">[{domain}] Có đơn hàng {service_name} - {service_pack_name} số lượng {amount} đang chờ xử lý</textarea>
                          <ul>
                            <li><b>{domain}</b> => Tên website của quý khách.</li>
                            <li><b>{username}</b> => Tên đăng nhập của khách.</li>
                            <li><b>{service_name}</b> => Tên dịch vụ khách hàng mua.</li>
                            <li><b>{service_pack_name}</b> => Tên gói dịch vụ khách hàng mua.</li>
                            <li><b>{amount}</b> => Số lượng khách hàng mua.</li>
                            <li><b>{price}</b> => Số tiền khách hàng thanh toán.</li>
                            <li><b>{url}</b> => Link/ID cần tăng.</li>
                            <li><b>{note}</b> => Ghi chú của khách hàng.</li>
                          </ul>
                        </div>
                        <button name="SaveSettings" class="btn btn-info btn-icon-left btn-block m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-auto-bank" role="tabpanel" aria-labelledby="tab-auto-bank-tab">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control select2bs4" name="status_bank">
                            <option value="0">OFF
                            </option>
                            <option selected value="1">ON
                            </option>
                          </select>
                          <i>Chọn OFF hệ thống sẽ tạm dừng auto bank.</i>
                        </div>
                        <div class="form-group">
                          <label>Ngân hàng</label>
                          <select class="form-control select2bs4" name="type_bank">
                            <option value="Vietcombank">Vietcombank </option>
                            <option value="ACB">ACB </option>
                            <option selected value="MBBank">MBBank </option>
                            <option value="VPBank">VPBank </option>
                            <option value="Techcombank">Techcombank </option>
                            <option value="TPBank">TPBank </option>
                            <option value="VPBank">VPBank </option>
                            <option value="Vietinbank">Vietinbank </option>
                            <option value="Sacombank">Sacombank </option>
                            <option value="THESIEURE">THESIEURE </option>
                            <option value="MOMO">MOMO </option>
                            <option value="Viettelpay">Viettelpay </option>
                            <option value="Zalo Pay">Zalo Pay </option>
                            <option value="Cake">Cake </option>
                            <option value="Shopee Pay">Shopee Pay </option>
                            <option value="MSB">MSB </option>
                            <option value="NamABank">NamABank </option>
                            <option value="LienVietPostBank">LienVietPostBank </option>
                            <option value="VietCapitalBank">VietCapitalBank </option>
                            <option value="BIDV">BIDV </option>
                            <option value="VIB">VIB </option>
                            <option value="HDBank">HDBank </option>
                            <option value="SeABank">SeABank </option>
                            <option value="GPBank">GPBank </option>
                            <option value="PVcomBank">PVcomBank </option>
                            <option value="NCB">NCB </option>
                            <option value="ShinhanBank">ShinhanBank </option>
                            <option value="SCB">SCB </option>
                            <option value="PGBank">PGBank </option>
                            <option value="Agribank">Agribank </option>
                            <option value="SaigonBank">SaigonBank </option>
                            <option value="DongABank">DongABank </option>
                            <option value="BacABank">BacABank </option>
                            <option value="StandardChartered">StandardChartered </option>
                            <option value="Oceanbank">Oceanbank </option>
                            <option value="VRB">VRB </option>
                            <option value="ABBANK">ABBANK </option>
                            <option value="VietABank">VietABank </option>
                            <option value="Eximbank">Eximbank </option>
                            <option value="VietBank">VietBank </option>
                            <option value="IndovinaBank">IndovinaBank </option>
                            <option value="BaoVietBank">BaoVietBank </option>
                            <option value="PublicBank">PublicBank </option>
                            <option value="SHB">SHB </option>
                            <option value="CBBank">CBBank </option>
                            <option value="OCB">OCB </option>
                            <option value="KienLongBank">KienLongBank </option>
                            <option value="CIMB">CIMB </option>
                            <option value="HSBC">HSBC </option>
                            <option value="DBSBank">DBSBank </option>
                            <option value="Nonghyup">Nonghyup </option>
                            <option value="HongLeong">HongLeong </option>
                            <option value="IBK Bank">IBK Bank </option>
                            <option value="Woori">Woori </option>
                            <option value="UnitedOverseas">UnitedOverseas </option>
                            <option value="KookminHN">KookminHN </option>
                            <option value="KookminHCM">KookminHCM </option>
                            <option value="COOPBANK">COOPBANK </option>
                            <option value="EasyPaisa">EasyPaisa </option>
                            <option value="JazzCash">JazzCash </option>
                          </select>
                          <i>Chọn ngân hàng bạn cần sử dụng auto.</i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Token Bank (<a type="button" data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="token_bank" value="" placeholder="Nhập token ngân hàng">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Số tài khoản (<a type="button" data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="stk_bank" value="" placeholder="Nhập số tài khoản ngân hàng cần Auto">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mật khẩu Internet Banking (<a type="button" data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="mk_bank" value="" placeholder="Nhập mật khẩu internet banking">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nội dung nạp</label>
                          <input type="text" class="form-control" name="prefix_autobank" value="NAP" placeholder="Tiền tố nội dung nạp tiền">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ghi chú nạp tiền</label>
                          <textarea id="recharge_notice" name="recharge_notice">
                            <ul>
                                      <li>Nhập đ&uacute;ng nội dung chuyển tiền.</li>
                                      <li>Cộng tiền trong v&agrave;i gi&acirc;y.</li>
                                      <li>Li&ecirc;n hệ BQT nếu nhập sai nội dung chuyển.</li>
                                    </ul>
                                    </textarea>
                        </div>
                        <button name="SaveSettings" class="btn btn-info btn-icon-left btn-block m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-auto-momo" role="tabpanel" aria-labelledby="tab-auto-momo">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control select2bs4" name="status_momo">
                            <option value="0">OFF
                            </option>
                            <option selected value="1">ON
                            </option>
                          </select>
                          <i>Chọn OFF hệ thống sẽ tạm dừng auto momo.</i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Token MOMO (<a type="button" data-toggle="modal" data-target="#modal-hd-auto-momo" href="#">Xem
                              hướng dẫn</a>)</label>
                          <input type="text" class="form-control" name="token_momo" value="" placeholder="Nhập token ví momo">
                        </div>
                        <button name="SaveSettings" class="btn btn-info btn-icon-left m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-nap-the" role="tabpanel" aria-labelledby="tab-nap-the">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control select2bs4" name="status_napthe">
                            <option value="0">OFF
                            </option>
                            <option selected value="1">ON
                            </option>
                          </select>
                          <i>Chọn OFF hệ thống sẽ tạm dừng nạp thẻ.</i>
                        </div>
                        <div class="form-group">
                          <label>Partner ID (<a type="button" data-toggle="modal" data-target="#modal-hd-nap-the" href="#">Xem hướng dẫn</a>)</label>
                          <input type="text" name="partner_id_card" value="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Partner Key (<a type="button" data-toggle="modal" data-target="#modal-hd-nap-the" href="#">Xem hướng dẫn</a>)</label>
                          <input type="text" name="partner_key_card" value="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Phí Nạp Thẻ</label>
                          <input type="text" class="form-control" name="ck_napthe" value="30" placeholder="Nhập phí nạp thẻ nếu có nạp thẻ">
                          <i>Để 30 tức khách nạp 100.000đ sẽ được
                            70.000đ</i><br>
                          <i>Để phí = 0 nếu quý khách muốn cộng cho user giống thực nhận tại hệ thống
                            card24h.com</i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ghi chú nạp thẻ</label>
                          <textarea id="notice_napthe" name="notice_napthe"><ul>
                              <li>Vui l&ograve;ng nhập đầy đủ th&ocirc;ng tin <strong>Serial</strong> - <strong>Pin</strong> - <strong>Mệnh Gi&aacute;</strong> của thẻ.</li>
                              <li>Thẻ được xử l&yacute; tự động trong v&agrave;i gi&acirc;y.</li>
                              <li>Nạp sai mệnh gi&aacute; mất <strong>50%</strong> gi&aacute; trị thực của thẻ.</li>
                            </ul>
                            </textarea>
                        </div>
                        <button name="SaveSettings" class="btn btn-info btn-icon-left m-b-10" type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>


    <script>
      CKEDITOR.replace('paypal_notice');
      CKEDITOR.replace('notice_home');
      CKEDITOR.replace("notice_napthe");
      CKEDITOR.replace("recharge_notice");
    </script>
    <script>
      $(function() {
        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
          $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })
        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
          mode: "htmlmixed",
          theme: "monokai"
        });
        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo2"), {
          mode: "htmlmixed",
          theme: "monokai"
        });
      })
    </script>
    <script>
      $(function() {
        $('#datatable1').DataTable();
        $('#datatable2').DataTable();
      });
    </script>

  </div>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/dist/js/pages/dashboard.js"></script>
  <!-- CodeMirror -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/codemirror.js"></script>
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/mode/css/css.js"></script>
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/mode/xml/xml.js"></script>
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <!-- ChartJS -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/chart.js/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>

  <!-- bootstrap color picker -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Select2 -->
  <script src="https://dvmxh2.cmsnt.site/public/AdminLTE3/plugins/select2/js/select2.full.min.js"></script>
  <script>
    $(function() {
      $(".select2").select2()
      $(".select2bs4").select2({
        theme: "bootstrap4"
      });
    });
  </script>
</body>

</html>