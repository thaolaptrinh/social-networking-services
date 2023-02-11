<div style="padding-top:50px"></div>

<section class="page-section">
  <div class="container relative">
    <div class="align-center mb-40 mb-xxs-30">
      <ul class="nav nav-tabs tpl-minimal-tabs">
        <li class="active">
          <a href="#mini-one" data-toggle="tab">Khôi phục mật khẩu</a>
        </li>
      </ul>
    </div>
    <div class="tab-content tpl-minimal-tabs-cont section-text">
      <div class="tab-pane fade in active" id="mini-one">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form class="form contact-form" id="restore" onsubmit="event.preventDefault(); restore();" method="POST">
              <div class="clearfix">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="input-md round form-control def-text" placeholder="E-mail" required>
                </div>
              </div>

              <div class="g-recaptcha" data-sitekey="6LcLFLcjAAAAAKq67doxxe0Bk8akrQdFHOYcGdht"></div>


              <div class="clearfix">
                <div class="cf-left-col">
                  <div class="form-tip pt-20">
                    <a href="<?= BASE_URL('login') ?>">Đăng nhập</a>
                  </div>
                </div>
                <div class="cf-right-col">
                  <div class="align-right pt-10">
                    <input class="submit_btn btn btn-mod btn-medium btn-round" type="submit" id="restore-btn" value="Gửi yêu cầu">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>