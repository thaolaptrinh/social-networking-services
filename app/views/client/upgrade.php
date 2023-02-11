<style>
  html {
    overflow-y: visible !important;
    -ms-overflow-style: visible !important;
  }

  [v-cloak] {
    display: none;
  }

  .franchise_order {
    cursor: pointer;
  }

  .modal_order .panel {
    padding: 20px 30px;
    font-size: 14px;
  }

  .pricingTable {
    border: 1px solid #e7e7e7;
    text-align: center;
    padding: 0 30px 30px;
    transition: all 0.5s ease 0s;
  }

  .pricingTable:hover {
    border: 1px solid #0e056e;
  }

  .pricingTable .pricingTable-header {
    width: 210px;
    background: #0e056e;
    color: #fff;
    margin: -15px auto 95px;
    padding-top: 35px;
    position: relative;
    line-height: 30px;
  }

  .pricingTable .pricingTable-header:before {
    content: "";
    border-width: 0 0 15px 10px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #000;
    position: absolute;
    top: 0;
    left: -10px;
  }

  .pricingTable .pricingTable-header:after {
    content: "";
    border-width: 15px 0 0 10px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #000;
    position: absolute;
    top: 0;
    right: -10px;
  }

  .pricingTable .heading {
    font-size: 30px;
    font-weight: 800;
    margin: 5px 0;
    text-transform: uppercase;
    position: relative;
  }

  .pricingTable .heading:after {
    content: "";
    border-width: 60px 105px 0;
    border-style: solid;
    border-color: #0e056e rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    position: absolute;
    bottom: -130px;
    left: 0;
  }

  .pricingTable .currency,
  .pricingTable .month {
    font-size: 20px;
  }

  .pricingTable .price-value {
    color: #e93689;
    font-weight: bold;
    font-size: 36px;
  }

  .pricingTable .pricing-content ul {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
  }

  .pricingTable .pricing-content ul li {
    font-size: 14px;
    color: #334a6b;
    line-height: 40px;
  }

  .pricingTable-signup {
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    color: #334a6b;
    border: 2px solid #e7e7e7;
    padding: 10px 40px;
    transition: all 0.5s ease 0s;
  }

  .pricingTable-signup:hover {
    border: 2px solid #ea3489;
    color: #ea3489;
  }

  @media only screen and (max-width:990px) {
    .pricingTable {
      margin-bottom: 50px;
    }
  }

  .timer {
    font-size: 0;
    text-align: center;
  }

  .timer_section {
    display: inline-block;
    vertical-align: top;
  }

  .timer_section>div {
    display: inline-block;
    vertical-align: top;
    font-size: 50px;
    background: #e93689;
    color: #ffffff;
    line-height: 70px;
    width: 55px;
    margin: 0 1px;
    border-radius: 2px;
  }

  .timer_section>div.timer_section_desc {
    display: block;
    background: none;
    color: inherit;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 30px;
    width: auto;
    margin: 0;
  }

  .timer_delimetr {
    display: inline-block;
    vertical-align: top;
    font-size: 50px;
    line-height: 70px;
    margin: 0 5px;
  }

  @media (max-width: 767px) {
    .timer_section>div {
      font-size: 30px;
      width: 30px;
      line-height: 40px;
    }

    .timer_delimetr {
      line-height: 40px;
      font-size: 30px;
    }

    .timer_section>div.timer_section_desc {
      font-size: 14px;
      line-height: 26px;
    }
  }
</style>
<section class="page-section">
  <div class="row col-md-12 col-center">
    <div class="container relative">
      <hr style='margin-top: 47px' />
      <div class="row">
        <h2 class="text-center">NÂNG CẤP TÀI KHOẢN</h2>

        <div class="timer" data-finish="1675011599000" style="padding-bottom: 56px;">
          <div class="timer_section">
            <div class="days_1">0</div>
            <div class="days_2">0</div>
            <div class="timer_section_desc">NGÀY</div>
          </div>
          <div class="timer_delimetr">:</div>
          <div class="timer_section">
            <div class="hours_1">0</div>
            <div class="hours_2">0</div>
            <div class="timer_section_desc">GIỜ</div>
          </div>
          <div class="timer_delimetr">:</div>
          <div class="timer_section">
            <div class="minutes_1">0</div>
            <div class="minutes_2">0</div>
            <div class="timer_section_desc">PHÚT</div>
          </div>
          <div class="timer_delimetr">:</div>
          <div class="timer_section">
            <div class="seconds_1">0</div>
            <div class="seconds_2">0</div>
            <div class="timer_section_desc">GIÂY</div>
          </div>
        </div>
        <div class="col-md-12" style="font-size: 18px;">
          <div class="col-md-4 col-sm-6">
            <div class="pricingTable">
              <div class="pricingTable-header">
                <h3 class="heading">thường</h3>
                <s class="price">0</s><BR />
                <span class="price price-value">0</span>
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="fas fa-check"></i> Sử các dịch vụ chất lượng</li>
                  <li><i class="fas fa-check"></i> Sử dụng hệ thống API</li>
                </ul>
              </div>
              <a class="pricingTable-signup but_order franchise_order" style="text-decoration: none;" href="<?= BASE_URL('balance') ?>">Nâng cấp</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="pricingTable" style="background-color: #fafaff;">
              <div class="pricingTable-header">
                <h3 class="heading">ct viên</h3>
                <s class="price">2000000</s><BR />
                <span class="price price-value">1000000</span>
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="fas fa-check"></i> Sử các dịch vụ chất lượng</li>
                  <li><i class="fas fa-check"></i> Sử dụng hệ thống API</li>
                  <li><i class="fas fa-check"></i> Có nhiều ưu đãi lên đến 5%</li>


                </ul>
              </div>
              <a class="pricingTable-signup but_order franchise_order" style="text-decoration: none;" href="<?= BASE_URL('balance') ?>">Nâng cấp</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="pricingTable">
              <div class="pricingTable-header">
                <h3 class="heading">đại lý</h3>
                <s class="price">10000000</s><BR />
                <span class="price price-value">5000000</span>
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="fas fa-check"></i> Sử các dịch vụ chất lượng</li>
                  <li><i class="fas fa-check"></i> Sử dụng hệ thống API</li>
                  <li><i class="fas fa-check"></i> Có nhiều ưu đãi lên đến 10%</li>
                </ul>
              </div>
              <a class="pricingTable-signup but_order franchise_order" style="text-decoration: none;" href="<?= BASE_URL('balance') ?>">Nâng cấp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script type="text/javascript">
  function timer(f_time) {
    function timer_go() {
      var n_time = Date.now();
      var diff = f_time - n_time;
      if (diff <= 0)
        return false;
      var left = diff % 1000;


      diff = parseInt(diff / 1000);
      var s = diff % 60;
      if (s < 10) {
        $(".seconds_1").html(0);
        $(".seconds_2").html(s);
      } else {
        $(".seconds_1").html(parseInt(s / 10));
        $(".seconds_2").html(s % 10);
      }


      diff = parseInt(diff / 60);
      var m = diff % 60;
      if (m < 10) {
        $(".minutes_1").html(0);
        $(".minutes_2").html(m);
      } else {
        $(".minutes_1").html(parseInt(m / 10));
        $(".minutes_2").html(m % 10);
      }


      diff = parseInt(diff / 60);
      var h = diff % 24;
      if (h < 10) {
        $(".hours_1").html(0);
        $(".hours_2").html(h);
      } else {
        $(".hours_1").html(parseInt(h / 10));
        $(".hours_2").html(h % 10);
      }


      var d = parseInt(diff / 24);
      if (d < 10) {
        $(".days_1").html(0);
        $(".days_2").html(d);
      } else {
        $(".days_1").html(parseInt(d / 10));
        $(".days_2").html(d % 10);
      }

      setTimeout(timer_go, left);
    }

    setTimeout(timer_go, 0);
  }
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "VND",
    minimumFractionDigits: 0,
  });


  $(document).ready(function() {


    $('.price').each(function(index, element) {
      // element == this

      $(this).html(formatter.format($(this).html()));


    });
    var time = $(".timer").attr("data-finish");
    timer(time);
  });
</script>