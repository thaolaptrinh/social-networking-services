<div style="padding-top:50px"></div>

<section class="page-section">
  <div class="container relative">
    <div class="row">
      <div class="col-md-12 mb-20">
        <h1 class="section-title font-alt mb-40">Lịch sử nạp tiền</h1>
        <form role="form" onclick="this.form.submit();" method='GET'>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-2">
                <label>Từ ngày</label>
                <input type="text" name="date_start" class="form-control datepicker" value='' placeholder='DD.MM.YYYY' autocomplete='off'>
              </div>
              <div class="col-sm-2">
                <label>đến ngày</label>
                <input type="text" name="date_end" class="form-control datepicker" value='' placeholder='DD.MM.YYYY' autocomplete='off'>
              </div>
              <div class="col-sm-3">
                <label>Phương thức nạp</label>
                <select class="form-control" name="method">
                  <option value="all">Tất cả</option>
                  <?php

                  if (
                    isset($this->data['payment_methods'])
                    && !empty($this->data['payment_methods'])
                  ) {

                    foreach ($this->data['payment_methods'] as $p) {
                      extract($p); ?>
                      <option value="<?= $method_id ?>"><?= $method_name ?></option>


                  <?php }
                  } ?>

                </select>
              </div>
              <div class="col-sm-3">
                <label>Trạng thái</label>
                <select class="form-control" name="status">
                  <option value="0">Tất cả</option>
                  <option value="Pending">Đang chờ thanh toán</option>
                  <option value="Success">Đã thanh toán</option>
                  <option value="Canceled">Đã hủy</option>
                </select>

              </div>
              <div class="col-md-2">
                <label style='visibility: hidden'>s</label>
                <button type='submit' class='btn btn-primary btn-block'>Hiển thị</button>
              </div>
            </div>
          </div>
        </form>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th width="160">Ngày</th>
              <th>Phương thức</th>
              <th>Số tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <?php

            if (
              isset($this->data['payments'])
              && !empty($this->data['payments'])
            ) {

              foreach ($this->data['payments'] as $pm) {
                extract($pm); ?>

                <tr>
                  <td><?= $payment_create ?></td>
                  <td><?= $method_name ?></td>
                  <td><?= number_format($payment_amount, 0, '.', ',') ?> <sup>đ</sup></td>
                  <td><?= $payment_status ?> </td>
                </tr>

            <?php }
            } ?>

          </tbody>
          <tfoot>
            <tr>
              <th class="text-right">Tổng:</th>
              <th>1</th>
              <th>2.04</th>
              <th>1 success</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</section>