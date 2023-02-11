<div style="padding-top:50px"></div>
<section class="page-section">
  <div class="container relative">
    <div class="align-center mb-40 mb-xxs-30">
      <ul class="nav nav-tabs tpl-minimal-tabs">
        <li class="active">
          <a href="#mini-one" data-toggle="tab"><i class="far fa-key"></i> Đăng nhập</a>
        </li>
        <li>
          <a href="#mini-two" data-toggle="tab"><i class="far fa-user-plus"></i> Đăng ký</a>
        </li>
      </ul>
    </div>
    <div class="tab-content tpl-minimal-tabs-cont section-text">
      <div class="tab-pane fade in active" id="mini-one">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form class="form contact-form" id="login" onsubmit="event.preventDefault(); login();" method="POST">
              <div class="clearfix">

                <div class="form-group">
                  <input type="text" name="username" id="username" class="input-md round form-control def-text" placeholder="Tài khoản" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="input-md round form-control def-text" placeholder="Mật khẩu" required>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcLFLcjAAAAAKq67doxxe0Bk8akrQdFHOYcGdht"></div>

                <input type="hidden" name="check" id="check" value="">
              </div>
              <div class="clearfix">
                <div class="cf-left-col">
                  <div class="form-tip pt-20">
                    <a href="<?= BASE_URL('recovery') ?>">Quên mật khẩu?</a>
                  </div>
                </div>
                <div class="cf-right-col">
                  <div class="align-right pt-10">
                    <button class="submit_btn btn btn-mod btn-medium btn-round" id="login-btn">Đăng nhập</button>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="mini-two">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form method="POST" onsubmit="event.preventDefault(); register();" id="register">
              <div class="clearfix">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="input-md round form-control def-text" placeholder="Địa chỉ email" pattern=".{3,64}" autocomplete="off" required />
                </div>

                <div class="form-group">
                  <input type="text" name="username" id="username" class="input-md round form-control def-text" placeholder="Tài khoản" pattern=".{6,32}" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="input-md round form-control def-text" placeholder="Mật khẩu" pattern=".{8,32}" autocomplete="off" required>
                </div>


                <div class="form-group">
                  <input type="password" name="re_password" id="re_password" class="input-md round form-control def-text" placeholder="Nhập lại mật khẩu" pattern=".{8,32}" autocomplete="off" required>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcLFLcjAAAAAKq67doxxe0Bk8akrQdFHOYcGdht"></div>
              </div>
              <div class="pt-10">
                <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Đăng ký</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</section>