<div style="padding-top:50px"></div>

<style>
  .generate-api {
    text-decoration: none;
    color: #1A315C;
    box-shadow: 0px 0px 5px 0px #f0f0f0;
  }

  .generate-api:hover {
    text-decoration: none;
    cursor: pointer;
    color: #1F1A5C;
  }

  #user-api {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }



  .copy-api {
    cursor: pointer;
  }
</style>
<section class="page-section" id="settings">
  <div class="row center-block">
    <div class="container relative">
      <h1 class="section-title font-alt" style="margin-bottom: 40px">Cài đặt</h1>
      <div class="col-sm-6 mb-70">
        <div class="form-group">
          <div class="form-tip">Email</div>
          <input type="text" value="<?= ($_SESSION['user_data']['user_email'] ?? null) ?>" class="input-md round form-control def-text" readonly>
        </div>

        <div class="form-group">
          <div class="form-tip">Tài khoản</div>
          <input type="text" value="<?= ($_SESSION['user_data']['user_username'] ?? null) ?>" class="input-md round form-control def-text" readonly>
        </div>

        <div class="form-tip">API KEY</div>
        <div class="input-group">
          <input type="text" id="user-api" value="<?= ($this->data['user_data']['user_api_key'] ?? null) ?>" class="input-md round form-control def-text" readonly>
          <span class="input-group-addon">
            <span class="copy-api" id="copy-api" data-clipboard-target="#user-api">Copy</span>
          </span>
        </div>
        <a onClick="generateNewAPI();" class="generate-api">Tạo mới</a>
      </div>
      <div class="col-sm-6 mb-70">
        <form method="POST" id="update-password" onsubmit="event.preventDefault(); updatePassword();">
          <div class="form-group">
            <div class="form-tip">Mật khẩu hiện tại</div>
            <input type="password" name="current-password" class="input-md round form-control def-text" required autocomplete="off" placeholder="Mật khẩu hiện tại">
          </div>
          <div class="form-group">
            <div class="form-tip">Mật khẩu mới</div>
            <input type="password" name="new-password" class="input-md round form-control def-text" required autocomplete="off" placeholder="Mật khẩu mới">
          </div>
          <div class="form-group">
            <div class="form-tip">Nhập lại mật khẩu mới</div>
            <input type="password" name="repeat-new-password" class="input-md round form-control def-text" required autocomplete="off" placeholder="Nhập lại mật khẩu mới">
          </div>
          <div class="form-group pull-right">
            <button class="btn btn-mod btn-border btn-large btn-round">Thay đổi mật khẩu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  new ClipboardJS('.copy-api');
  $(document).ready(function() {
    $('#copy-api').on('click', function() {
      but = $(this);
      but.html('Đã copy');
      setTimeout(() => but.html('Copy'), 2000)
    });
  });
</script>