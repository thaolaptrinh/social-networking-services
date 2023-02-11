<div style="padding-top:50px"></div>

<section class="page-section" style="overflow:auto;">
  <div class="row col-md-10 col-center">

    <div class="dataTables_wrapper">
      <div class="table-responsive dataTables_scroll">
        <table id="services" class="cell-border dataTable" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th width="300px">Dịch vụ</th>
              <th>Mô tả</th>
              <th style="min-width: 78px;">Rate / 1</th>
              <th style="min-width: 60px;">Min \ Max</th>
            </tr>
          </thead>
          <tbody>

            <?php

            if (($this->model->data['services']) ?? null) {
              $services = $this->model->data['services'];
              foreach ($services as $key => $value) {

            ?>
                <tr>
                  <td colspan="6" style="border-bottom: 1px solid black; border-top: 1px solid black; text-align: center; font-weight: bold">
                    <?= $key ?></td>
                </tr>

                <?php
                if ($value) {
                  foreach ($value as $v) {
                    extract($v); ?>
                    <tr>
                      <td><?= $id ?></td>
                      <td>Gói dịch vụ <?= $id ?></td>
                      <td>
                        <div class="well well-sm com">
                          Đang cập nhật
                        </div>
                      </td>
                      <td style="text-align: center; position: relative">
                        <?= $rate  ?> <sup>vnđ</sup>
                      </td>
                      <td style="text-align: center"><?= $min ?> \ <?= $max ?></td>
                    </tr>

                  <?php }
                } else { ?>
                  <tr>
                    <td colspan="5" class="text-center">Đang cập nhật</td>
                  </tr>

            <?php }
              }
            } ?>


          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th width="300px">Dịch vụ</th>
              <th>Mô tả</th>
              <th style="min-width: 78px;">Rate</th>
              <th style="min-width: 60px;">Min -> Max</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <div class="text-center mt-30">
    <a style="text-decoration: none;" href="<?= BASE_URL('order') ?>" rel="nofollow" class="btn btn-primary btn-md text-uppercase">
      <i class="fas fa-shopping-basket"></i> Tạo đơn hàng</a>
  </div>
</section>