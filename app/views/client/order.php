<style>
  #reseller-banner {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    height: 80px;
    padding: 0 20px 0 20px;
    border-radius: 10px;
    color: #fff;
    background: linear-gradient(110deg, #ea50a3, #0587f7);
    text-decoration: none;
    box-shadow: 0 0 15px 0 rgb(0 0 0 / 10%);
    overflow: hidden;
  }

  #reseller-banner:before {
    background-image: url(<?= BASE_URL('theme/img/reseller-banner-bg-md.png') ?>);
    background-position: 100%;
    background-repeat: no-repeat;
    background-size: contain;
    content: " ";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
  }

  #reseller-banner .title {
    text-transform: uppercase;
    font-size: 24px;
    position: relative;
    line-height: 18px;
    font-weight: 500;
    text-align: left;
    letter-spacing: 2px;
    width: 800px;
    margin-bottom: unset;
    margin-top: unset;
  }

  #reseller-banner .title br {
    display: none !important;
  }

  #reseller-banner .arrow {
    right: 30px;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 150px;
    height: 32px;
    border-radius: 16px;
    color: #fff;
    background-color: #e81586;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .88px;
  }

  #reseller-banner .arrow .icon {
    display: none;
  }

  @media only screen and (max-width: 1126px) {
    #reseller-banner .title {
      font-size: 20px;
    }
  }

  @media only screen and (max-width: 900px) {
    #reseller-banner .title {
      font-size: 20px;
      line-height: 26px;
    }

    #reseller-banner .title br {
      display: inline !important;
    }
  }

  @media only screen and (max-width: 540px) {
    #reseller-banner:before {
      background-image: none;
    }

    #reseller-banner .arrow {
      right: 20px;
      width: 32px;
    }

    #reseller-banner .arrow .arrow-text {
      display: none;
    }

    #reseller-banner .arrow .icon {
      display: block;
    }
  }
</style>
<div style="padding-top:50px"></div>

<section class="page-section">
  <div class="container relative">
    <div class="row col-center">
      <div style="margin-bottom: 15px;">
        <a id="reseller-banner" href="<?= BASE_URL('upgrade') ?>" target="_blank">
          <h4 class="title">Nâng cấp <br />nhận nhiều ưu đãi</h4>
          <div class="arrow">
            <span class="arrow-text d-md-inline-block mr-10">Xem ngay</span>
            <i class="icon fa fa-arrow-right" aria-hidden="true"></i>
          </div>
        </a>
      </div>
      <div class="col-sm-6 mb-20 col-portlet">
        <div class="col-sm-12">
          <form method="POST" id="new-order" onsubmit="event.preventDefault(); newOrder();">
            <div class="form-group">
              <div>Danh mục<caption></caption>
              </div>
              <select class="input-md round form-control" id="category" onChange="removeQuantity(); document.getElementById('itog').style.display = 'none';">
                <option disabled selected id="sel">Chọn danh mục</option>

                <?php
                if ($this->model->data['categories'] ?? null) {
                  foreach ($this->model->data['categories'] as $category) {
                    extract($category);                 ?>
                    <option value="<?= $id ?>"><?= $name ?></option>

                <?php }
                } ?>


              </select>
            </div>
            <div class="form-group">
              <div>Dịch vụ <b>(Rate / 1 coin)</b></div>
              <select class="input-md round form-control" id="service" name="service" onChange="selectService(this.value); nullQuantity();">
                <option style="display:none;">Chọn dịch vụ</option>
              </select>
            </div>
            <div class="form-group">
              <div>Link</div>
              <input type="text" id="order_link" name="link" class="input-md round form-control def-text" placeholder="<?= BASE_URL('') ?>" required>
            </div>

            <div class="form-group">
              <div>Số lượng</div>
              <div id="dop" style="display:none;"></div>
              <input type="number" id="order_quantity" name="quantity" class="input-md round form-control def-text" onChange="updatePrice(document.getElementById('service').value, this.value);" onkeyup="updatePrice(document.getElementById('service').value, this.value);" placeholder="1000" required>
            </div>
            <input type="hidden" id="order_amount" name="amount" value="" />
            <div class="form-group">
              <div class="form-tip">
                <i class="fa fa-rub" aria-hidden="true"></i>
                Tổng tiền thanh toán
              </div>
              <div class="input-group">
                <input type="text" class="input-md form-control def-text" id="new_order_price" style="cursor: not-allowed;background-color: #eeeeee;" value="0" />
                <span class="input-group-addon" id="basic-addon2">VND</span>
              </div>
            </div>

            <div class="form-group">
              <div style="font-size: 14px;">
                <div id="itog" style="display: none; color: red;">

                </div>
                <span id="service-description"></span>
                <hr>
                <div class="form-group">
                  <b>Min: </b><span id="min_quantity">0</span>
                  <b>Max: </b><span id="max_quantity">0</span><br>
                </div>
              </div>
              <input type="submit" name="order" class="submit_btn btn btn-mod btn-medium btn-round" value="Tạo đơn hàng">
            </div>
          </form>
          Vui lòng kiểm tra liên kết trước khi order để tránh lỗi xảy ra (một số dịch vụ sẽ không thể refund khi xảy ra lỗi).
          Không đặt nhiều đơn hàng với cùng liên kết cùng lúc để tránh trùng lặp!
        </div>
      </div>
      <div class="col-sm-5 mb-20 col-sm-offset-1 col-portlet">
        <div class="col-sm-12">
          <div style="font-size: 14px;">
            <h4 class="uppercase text-center">Nạp tiền</h4>
            <div class="alert bshadow">Lựa chọn các <b>phương thức nạp tiền</b> mà <b>bạn</b> sử dụng, Thanh toán một các tự động</div>
            <hr>
            <h5 class="uppercase"><b>Số dư:</b> <span id="current-balance"><?= $this->data['user_data']['user_balance']  ?? null ?></span></h5>
            <hr>

            <style>
              .payment_system_tab {
                display: none;
              }

              .payment_system {
                margin-bottom: 3px;
              }

              .payment_system label {
                cursor: pointer;
              }

              .payment_error {
                color: red;
                font-weight: bold;
              }
            </style>

            <?php if ($this->data['payment_methods'] ?? null) {

              foreach ($this->data['payment_methods'] as $p) {
                extract($p) ?>

                <div class="col-sm-12 input-group m-bot15 payment_system">
                  <label class="pay">
                    <input type="radio" name="paymentType" value="<?= $method_type ?>" />
                    <span style="font-weight: 400;">
                      <img src="<?= $method_img ?>" width="30" /> <?= $method_name ?>
                      <span class="badge"><?= $method_discount ?>%</span>
                    </span>
                  </label>
                </div>

              <?php } ?>

              <hr>
              <?php foreach ($this->data['payment_methods'] as $p) {
                extract($p) ?>

                <div class="col-sm-12 payment_system_tab" id="tab<?= $method_type ?>">
                  <div class="form-group">
                    <form method="POST" onsubmit="return payment_validate(this)">
                      <div class="col-sm-12 input-group m-bot15 pb-20">
                        <div>Số tiền cần nạp:</div>
                        <div class="input-group">
                          <input type="number" inputmode="decimal" class="input-md form-control def-text form_amount" data-min="<?= $method_min ?>" name="amount" autocomplete="off" value="0" />
                          <span class="input-group-addon" id="basic-addon2">
                            <span class="amount_vnd">0</span></span>
                        </div>
                        <div class="payment_error" style="display: none"></div>

                      </div>
                      <input type="hidden" name="type" value="<?= $method_id ?>">
                      <input type="submit" class="font-alt submit_btn btn btn-mod btn-medium btn-round" value="Tạo hóa đơn" name="create_invoice" />
                    </form>
                  </div>
                  <hr>
                </div>

              <?php } ?>


            <?php } ?>


            <script>
              const formatter = new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: "VND",
                minimumFractionDigits: 0,
              });


              function payment_validate(_this) {

                var amount = $(_this).find('.form_amount').val();
                var min = $(_this).find('.form_amount').attr('data-min');

                $('.payment_error').hide();

                if (parseInt(amount) < parseInt(min)) {
                  $('.payment_error').show().text('Số tiền nạp tối thiểu: ' +
                    formatter.format(min));

                  return false;
                }

                return true;
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="myModal_77" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-image: none">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Thông báo</h4>
      </div>
      <div class="modal-body">
        <div align="center"><img src="<?= BASE_URL('img/other/goldcoin.gif') ?>" width="200px;"><br>
          <span style="font-size:20px">
           Vui lòng kiểm tra liên kết trước khi tạo đơn hàng để tránh lỗi xảy ra (một số dịch vụ sẽ không thể refund khi xảy ra lỗi)!</span> <br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default modal_received_but" data-modal-id="77" data-dismiss="modal">
          Đóng thông báo
        </button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {

    if (!window.myModalPassActive && !window.myModalActive) {
      $("#myModal_77").modal('show');
      window.myModalActive = true;
    }

    $("#myModal_77").on('hidden.bs.modal', function(e) {
      window.myModalActive = false;
    });

  });
</script>
