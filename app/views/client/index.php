<section class="page-section" id="home">


  <div class="align-center">
    <div class="local-scroll">
      <div class="hs-line-8 no-transp font-alt mb-50 mb-xs-30" style="padding:5%; padding-top: 70px;">NHANH | CHẤT LƯỢNG | AN TOÀN</div>
      <h1 class="hs-line-14 font-alt mb-50 mb-xs-30">VIEW1S.COM №1</h1>
      <div class="hormenu">

        <?php if ($_SESSION['user_data']['user_username'] ?? null) { ?>
          <a href="<?= BASE_URL('order') ?>" class="btn btn-mod btn-border btn-medium btn-round" style="background:transparent;">
            <i class="fas fa-cart-plus"></i> Tạo đơn hàng</a>
          <a href="<?= BASE_URL('balance') ?>" class="btn btn-mod btn-border btn-medium btn-round" style="background:transparent;"><i class="fas fa-usd-circle"></i> Nạp tiền</a>

        <?php } else { ?>

          <a href="<?= BASE_URL('login') ?>" class="btn btn-mod btn-border btn-medium btn-round" style="background:transparent;"><i class="fas fa-sign-in"></i> Đăng nhập / Đăng ký</a>
          <a href="<?= BASE_URL('services') ?>" class="btn btn-mod btn-border btn-medium btn-round" style="background:transparent;"><i class="far fa-gem" aria-hidden="true"></i> Danh sách dịch vụ</a>

        <?php } ?>


      </div>
      <div class="mouse_btn hidden-xs">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
        <div>
          <div class="m_scroll_arrows unu"></div>
          <div class="m_scroll_arrows doi"></div>
          <div class="m_scroll_arrows trei"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="page section bgray">
  <div class="relative container" style="padding-top: 35px;">
    <div class="row">
      <div class="infos_b">
        <div class="infos">
          <div class="infos_in">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 392.5 512" style="enable-background:new 0 0 392.5 512;" xml:space="preserve" class="svg replaced ico">
              <path style="
                              fill:#10A0DE;" d="M350,366l-81.5-40.8c-7.7-3.8-12.5-11.6-12.5-20.2v-28.9c2-2.4,4-5.1,6.1-8.1
                              c10.6-14.9,19-31.6,25.2-49.5c12-5.5,19.9-17.4,19.9-30.9v-34.1c0-8.2-3.1-16.2-8.5-22.4V85.8c0.5-4.7,2.4-32.6-17.9-55.7
                              c-17.5-20-46-30.1-84.5-30.1s-67,10.1-84.5,30.1c-20.2,23-18.3,51-17.9,55.7v45.4c-5.5,6.2-8.5,14.2-8.5,22.4v34.1
                              c0,10.4,4.7,20.1,12.8,26.5c7.8,31,24.2,54.3,29.9,61.8v28.2c0,8.3-4.5,15.8-11.8,19.8l-76.1,41.5C15.4,379.1,0,405,0,433.2v27.6
                              C0,501.3,128.4,512,196.3,512s196.3-10.7,196.3-51.2v-26C392.5,405.5,376.2,379.1,350,366z M375.5,460.8
                              c0,11.6-63.2,34.1-179.2,34.1S17.1,472.4,17.1,460.8v-27.6c0-21.9,12-42.1,31.2-52.6l76.1-41.5c12.7-7,20.7-20.3,20.7-34.8V270
                              l-2-2.4c-0.2-0.2-21.1-25.5-29.1-60.3l-0.8-3.4l-2.9-1.9c-4.9-3.2-7.9-8.5-7.9-14.3v-34.1c0-4.8,2-9.3,5.7-12.6l2.8-2.5V85.3
                              l-0.1-1.1c0-0.2-2.9-23.9,13.7-42.8c14.1-16.1,38.3-24.3,71.7-24.3c33.3,0,57.4,8.1,71.6,24.1c16.6,18.8,13.9,42.8,13.8,43
                              l-0.1,54.3l2.8,2.5c3.7,3.3,5.7,7.8,5.7,12.6v34.1c0,7.4-4.9,14-12.1,16.2l-4.2,1.3l-1.4,4.2c-5.7,17.8-13.8,34.2-24.2,48.8
                              c-2.5,3.6-5,6.8-7.1,9.2l-2.1,2.4V305c0,15.1,8.4,28.7,21.9,35.4l81.5,40.8c20.4,10.2,33.1,30.7,33.1,53.6V460.8z"></path>
            </svg>
            <h4 style="color: rgb(16, 160, 222);"><?= isset($this->model->data['total_client']) ? (number_format($this->model->data['total_client'], '0', '', ' ')) : 0 ?></h4>
            <p>Người dùng</p>
          </div>
        </div>
        <div class="infos">
          <div class="infos_in">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced ico">
              <g>
                <path style="fill:#72BD35;" d="M504,298L478,271.9c-10.6-10.6-28-10.6-38.6,0L298.6,412.6l-19.4,71.1l-4.7,4.7
                              c-3.5,3.5-3.6,9.3-0.1,12.8l0,0.2l0.2,0c1.8,1.7,4.1,2.6,6.4,2.6c2.3,0,4.7-0.9,6.5-2.7l4.8-4.8l71.1-19.4L504,336.6
                              C514.7,325.9,514.7,308.6,504,298z M319.8,417.4l93.7-93.6l38.8,38.8l-93.7,93.7L319.8,417.4z M311.5,435l29.4,29.4l-40.5,11
                              L311.5,435z M491.1,323.6l-26,26l-38.8-38.8l26-26c3.5-3.5,9.2-3.5,12.7,0l26.1,26.1C494.6,314.4,494.6,320.1,491.1,323.6z"></path>
                <path style="fill:#72BD35;" d="M246.9,117.6c-5,0-9.1,4.1-9.1,9.1c0,5.1,4.1,9.1,9.1,9.1h164.6c5,0,9.1-4.1,9.1-9.1
                              c0-5.1-4.1-9.1-9.1-9.1H246.9z"></path>
                <path style="fill:#72BD35;" d="M420.6,254.8c0-5.1-4.1-9.1-9.1-9.1H246.9c-5,0-9.1,4.1-9.1,9.1c0,5.1,4.1,9.1,9.1,9.1h164.6
                              C416.5,263.9,420.6,259.8,420.6,254.8z"></path>
                <path style="fill:#72BD35;" d="M188.2,74.1c-3.8-3.3-9.6-2.9-12.9,1l-57.1,66.6l-34.9-26.2c-4-3-9.8-2.2-12.8,1.8
                              c-3,4-2.2,9.8,1.8,12.8l41.8,31.4c1.6,1.2,3.6,1.8,5.5,1.8c2.6,0,5.1-1.1,6.9-3.2L189.2,87C192.4,83.2,192,77.4,188.2,74.1z"></path>
                <path style="fill:#72BD35;" d="M188.2,202.1c-3.8-3.3-9.6-2.9-12.9,1l-57.1,66.6l-34.9-26.2c-4-3-9.8-2.2-12.8,1.8
                              s-2.2,9.8,1.8,12.8l41.8,31.4c1.6,1.2,3.6,1.8,5.5,1.8c2.6,0,5.1-1.1,6.9-3.2l62.7-73.1C192.4,211.2,192,205.4,188.2,202.1z"></path>
                <path style="fill:#72BD35;" d="M175.3,340.2l-57.1,66.6l-34.9-26.2c-4-3-9.8-2.2-12.8,1.8c-3,4-2.2,9.8,1.8,12.8l41.8,31.4
                              c1.6,1.2,3.6,1.8,5.5,1.8c2.6,0,5.1-1.1,6.9-3.2l62.7-73.1c3.3-3.8,2.8-9.6-1-12.9C184.3,336,178.6,336.4,175.3,340.2z"></path>
                <path style="fill:#72BD35;" d="M228.6,483.3H111.3c-51.3,0-93-41.7-93-93V119.2c0-51.3,41.7-93,93-93h271.1c51.3,0,93,41.7,93,93
                              v108.1c0,5.1,4.1,9.1,9.1,9.1c5,0,9.1-4.1,9.1-9.1V119.2c0-61.4-49.9-111.3-111.3-111.3H111.3C49.9,7.9,0,57.8,0,119.2v271.1
                              c0,61.4,49.9,111.3,111.3,111.3h117.3c5,0,9.1-4.1,9.1-9.1C237.7,487.4,233.6,483.3,228.6,483.3z"></path>
              </g>
            </svg>
            <h4 style="color: rgb(114, 189, 53);"><?= isset($this->model->data['total_running_order']) ? (number_format($this->model->data['total_running_order'], '0', '', ' ')) : 0 ?></h4>
            <p>Đơn đang chạy</p>
          </div>
        </div>
        <div class="infos">
          <div class="infos_in">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced ico">
              <g>
                <path style="fill:#F74B4B;" d="M503.3,377.8c-1-3.3-3.9-5.7-7.3-6.2l-70.1-9.8l-31.3-61.1c-3.1-6-13-6-16,0l-31.3,61.1l-70.1,9.8
                              c-3.4,0.5-6.3,2.9-7.3,6.2c-1,3.3-0.1,6.9,2.4,9.3l50.5,47.5L311,501.4c-0.6,3.4,0.8,6.8,3.5,8.8c2.7,2,6.4,2.4,9.5,0.8l62.7-31.8
                              l62.7,31.8c1.3,0.7,2.7,1,4.1,1c1.9,0,3.8-0.6,5.4-1.8c2.7-2,4.1-5.4,3.5-8.8l-11.9-66.9l50.5-47.5
                              C503.4,384.7,504.4,381.1,503.3,377.8z M434.5,424.7c-2.2,2.1-3.2,5.1-2.7,8.1l9.6,53.9l-50.7-25.7c-1.3-0.6-2.7-1-4.1-1
                              c-1.4,0-2.8,0.3-4.1,1l-50.7,25.7l9.6-53.9c0.5-3-0.5-6.1-2.7-8.1l-40.3-37.9l56.1-7.9c2.9-0.4,5.4-2.2,6.8-4.8l25.4-49.6
                              l25.4,49.6c1.3,2.6,3.9,4.4,6.8,4.8l56.1,7.9L434.5,424.7z"></path>
                <path style="fill:#F74B4B;" d="M413.7,108.1H251.5c-5,0-9,4-9,9s4,9,9,9h162.2c5,0,9-4,9-9S418.6,108.1,413.7,108.1z"></path>
                <path style="fill:#F74B4B;" d="M413.7,234.2H251.5c-5,0-9,4-9,9c0,5,4,9,9,9h162.2c5,0,9-4,9-9
                              C422.7,238.3,418.6,234.2,413.7,234.2z"></path>
                <path style="fill:#F74B4B;" d="M193.7,65.2c-3.8-3.2-9.5-2.8-12.7,1l-56.3,65.7L90.2,106c-4-3-9.6-2.2-12.6,1.8
                              c-3,4-2.2,9.6,1.8,12.6l41.2,30.9c1.6,1.2,3.5,1.8,5.4,1.8c2.5,0,5.1-1.1,6.8-3.2l61.8-72.1C197.9,74.2,197.4,68.5,193.7,65.2z"></path>
                <path style="fill:#F74B4B;" d="M193.7,191.4c-3.8-3.2-9.5-2.8-12.7,1L124.7,258l-34.4-25.8c-4-3-9.6-2.2-12.6,1.8
                              c-3,4-2.2,9.6,1.8,12.6l41.2,30.9c1.6,1.2,3.5,1.8,5.4,1.8c2.5,0,5.1-1.1,6.8-3.2l61.8-72.1C197.9,200.3,197.4,194.6,193.7,191.4z"></path>
                <path style="fill:#F74B4B;" d="M181,327.5l-56.3,65.6l-34.4-25.8c-4-3-9.6-2.2-12.6,1.8c-3,4-2.2,9.6,1.8,12.6l41.2,30.9
                              c1.6,1.2,3.5,1.8,5.4,1.8c2.5,0,5.1-1.1,6.8-3.2l61.8-72.1c3.2-3.8,2.8-9.5-1-12.7C189.9,323.2,184.2,323.7,181,327.5z"></path>
                <path style="fill:#F74B4B;" d="M251.5,468.5H118c-50.6,0-91.7-41.1-91.7-91.7V109.7C26.3,59.1,67.4,18,118,18H385
                              c50.5,0,91.7,41.1,91.7,91.7V325c0,5,4,9,9,9c5,0,9-4,9-9V109.7C494.7,49.2,445.5,0,385,0H118C57.5,0,8.3,49.2,8.3,109.7v267.1
                              c0,60.5,49.2,109.7,109.7,109.7h133.5c5,0,9-4,9-9S256.5,468.5,251.5,468.5z"></path>
              </g>
            </svg>
            <h4 style="color: rgb(247, 75, 75);"><?= (number_format($this->model->data['total_done_order'], '0', '', ' ') ?? 0) ?></h4>
            <p>Đơn thành công</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="page-section bgray" id="our">
  <div class="relative container wow fadeInUp">
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Chất lượng cao</h3>
            <p>
              Chúng tôi sử dụng hệ thống cung cấp dịch vụ chất lượng cao nhất.<br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="far fa-tachometer-alt-fastest"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Tốc độ nhanh</h3>
            <p>
              Chúng tôi đảm bảo tốc độ cao cho tất cả đơn hàng của bạn<br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="far fa-thumbs-up"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Đa dạng</h3>
            <p>
              Cung cấp nhiều dịch vụ với nhiều mạng xã hội khác nhau.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="far fa-lock"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">An toàn</h3>
            <p>
              Mọi dữ liệu của bạn được chúng tôi bảo mật.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fal fa-user-headset"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Hỗ trợ</h3>
            <p>
              Sẵn sàng hỗ trợ bạn trong thời nhanh nhất.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="far fa-code"></i>
            </div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">API</h3>
            <p>
              Tích hợp API cho đối tác và đại lý
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>