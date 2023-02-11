<div style="padding-top:50px"></div>


<?php $api_key = ($this->data['user_data']['user_api_key'] ?? null); ?>
<section class="page-section">
  <div class="row col-lg-12 col-center ">
    <div class="container relative">
      <h1 class="section-title font-alt mb-40 mb-sm-40">API</h1>
      <div class="row">
        <div class="col-md-6 mb-40">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="30%">HTTP method</td>
                <td width="70%"><code>GET/POST</code></td>
              </tr>
              <tr>
                <td>URL API</td>
                <td><code><?= BASE_URL('api/') ?></code></td>
              </tr>
              <tr>
                <td>Response format</td>
                <td><code>JSON</code></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-40">
          <pre><code>Đây là tài liệu API giúp bạn sử dụng hệ thống dịch vụ của chúng tôi !</code></pre>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-20">
          <h4 class="uppercase mb-30">Tạo đơn hàng</h4>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="20%">key</td>
                <td width="80%">Your API KEY: <code><?= $api_key ?></code></td>
              </tr>
              <tr>
                <td>action</td>
                <td>create or add</td>
              </tr>
              <tr>
                <td>service</td>
                <td>
                  Service ID
                </td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>Needed quantity</td>
              </tr>
              <tr>
                <td>link</td>
                <td>Link to page/post</td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-20">
          <h4 class="uppercase mb-30">Response example</h4>
          <pre><code>{"order": "142"}</code></pre>
        </div>
      </div>
      Request example:
      <code>
        <?= BASE_URL('api/?key=' . $api_key . '&action=create&service=206&quantity=200&link=https://www.tiktok.com/@thaoissprox/video/7159694017456884993')   ?>
      </code>
      <hr class="mb-60 mb-xs-30">
      <div class="row">
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Trạng thái đơn hàng</h4>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="20%">key</td>
                <td width="80%">Your API KEY: <code><?= $api_key ?></code></td>
              </tr>
              <tr>
                <td>action</td>
                <td>status</td>
              </tr>
              <tr>
                <td>order</td>
                <td>
                  Order ID
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Response example</h4>
          <pre><code>{
  "164678195":{
    "order_id": "164678195",
        "link": "22",
        "quantity": "100",
        "service": "206",
        "start_count": "0",
        "remains": "0",
        "charge": "0.023",
        "currency": "VND",
        "status": "Pending"
  }
}</code></pre>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Trạng thái nhiều đơn hàng</h4>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="20%">key</td>
                <td width="80%">Your API KEY: <code><?= $api_key ?></code></td>
              </tr>
              <tr>
                <td>action</td>
                <td>status</td>
              </tr>
              <tr>
                <td>order</td>
                <td>
                  Order IDs separated by commas
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Response example</h4>
          <pre><code>{
  "164678195":{
    "order_id": "164678195",
        "link": "22",
        "quantity": "100",
        "service": "206",
        "start_count": "0",
        "remains": "0",
        "charge": "0.023",
        "currency": "VND",
        "status": "Pending"
  },
  "164678190":{
    "order_id": "164678190",
        "link": "22",
        "quantity": "100",
        "service": "206",
        "start_count": "0",
        "remains": "0",
        "charge": "0.023",
        "currency": "VND",
        "status": "Pending"
  }
}</code></pre>
        </div>
      </div>
      Request example:
      <code><?= BASE_URL('api/?key=' . $api_key . '&action=status&order=164678195,164678190') ?></code>
      <hr class="mb-60 mb-xs-30">


      <div class="row">
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">SỐ DƯ TÀI KHOẢN</h4>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="20%">key</td>
                <td width="80%">Your API KEY: <code><?= $api_key ?></code></td>
              </tr>
              <tr>
                <td>action</td>
                <td>balance</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Response example</h4>
          <pre><code>{
    "balance": "9999",
    "currency": "VND",
}</code></pre>
        </div>
      </div>



      Request example:
      <code><?= BASE_URL('api/?key=' . $api_key . '&action=balance') ?></code>

      <hr class="mb-60 mb-xs-30">
      <div class="row">
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">danh sách dịch vụ</h4>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td width="20%">key</td>
                <td width="80%">Your API KEY: <code><?= $api_key ?></code></td>
              </tr>
              <tr>
                <td>action</td>
                <td>services</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mb-40">
          <h4 class="uppercase mb-30">Response example</h4>
          <pre><code>[
    {
        "ID": "251",
        "service": "206",
        "name": null,
        "rate": "0.23",
        "min": "100",
        "max": "10000000",
        "refill": "0",
        "cancel": "0",
        "dripfeed": "0",
        "currency": "VND"
    }
]</code></pre>
        </div>
      </div>
      Request example:
      <code><?= BASE_URL('api/?key=' . $api_key . '&action=services') ?></code>
      <hr id="bots" class="mb-60 mb-xs-30">


</section>