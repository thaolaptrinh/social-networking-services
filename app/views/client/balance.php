<div style="padding-top:50px"></div>

<section class="page-section">
  <div class="container relative">
    <div class="row">
      <h1 class="section-title font-alt" style="margin-bottom: 40px">nạp tiền</h1>
      <div class="col-sm-6 mb-20 col-portlet">
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
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">
          <h4 class="text-center">Chọn phương thức nạp tiền</h4>
          <div class="alert bshadow">Lựa chọn các <b>phương thức nạp tiền</b> mà <b>bạn</b> sử dụng, Thanh toán một các tự động</div>

          <hr>

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
        </div>

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
      <div class="col-sm-12">
        <h4 class="text-center">Nạp tiền gần đây</h4>
        <table class="table">
          <thead>
            <tr>
              <th>Số tiền</th>
              <th>Phương thức</th>
              <th>Thời gian</th>
            </tr>
          </thead>
          <tbody>

            <?php if ($this->data['payments'] ?? null) {
              foreach ($this->data['payments'] as $pm) {
                extract($pm);
                if ($payment_amount > 0) {
            ?>
                  <tr>
                    <td><?= number_format($payment_amount, 0, '.', ',') ?> <sup>đ</sup></td>
                    <td><?= $method_name ?></td>
                    <td><?= $payment_create ?></td>
                  </tr>

            <?php }
              }
            } ?>
          </tbody>
        </table>
        <br />
        <h5 class="text-center">Tổng nạp: <?= $this->data['total_payments'] > 0 ? number_format($this->data['total_payments'], 0, '.', ',')  : 0 ?><sup> đ</sup></h5>
        <center>
          <a href="<?= BASE_URL('balance_history') ?>">Lịch sử nạp tiền</a>
        </center>
      </div>
      </div>
      <div class="col-sm-5 mb-20 col-sm-offset-1 col-portlet">
        <div class="col-sm-12">
          <div class="text align-center">
          </div>
          <div class="col-sm-12 input-group m-bot15">
            Điều khoản sử dụng<br>
            <div style="font-size:12px;line-height: 1.2;text-align:justify;">

              Các phương thức nạp tiền hiện có đều hoạt động tự động, vui lòng làm theo hướng dẫn khi tạo hóa đơn <br>
              nếu xảy ra lỗi vui lòng liên hệ <a href="https://facebook.com/thaotoiday" target="_blank">Admin</a> để kịp thời hỗ trợ trong thời gian nhanh nhất.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>