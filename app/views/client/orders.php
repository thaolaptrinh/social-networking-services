<div style="padding-top:50px;"></div>
<section class="page-section" style="overflow:auto;">
  <div class="row col-md-10 col-center">
    <table id="all-orders" class="display" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Dịch vụ</th>
          <th>Rate</th>
          <th>Số lượng</th>
          <th>Link</th>
          <th>Thời gian</th>
          <th>Bắt đầu</th>
          <th>Còn lại</th>
          <th>Trạng thái</th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <th>ID</th>
          <th>Dịch vụ</th>
          <th>Rate</th>
          <th>Số lượng</th>
          <th>Link</th>
          <th>Thời gian</th>
          <th>Bắt đầu</th>
          <th>Còn lại</th>
          <th>Trạng thái</th>
        </tr>
      </tfoot>
    </table>
  </div>
</section>

<script>
  $(document).ready(function() {

    const formatter = new Intl.NumberFormat("en-US", {
      style: "currency",
      currency: "VND",
      minimumFractionDigits: 0,
    });


    $('#all-orders').DataTable({
      "order": [
        [0, "desc"]
      ],

      "processing": true,
      "bProcessing": true,
      ajax: '<?= BASE_URL('data/all-orders.php') ?>',
      columns: [{
          data: 'order_id'
        },
        {
          data: 'service'
        },
        {
          data: 'charge',
          render: function(data) {
            return formatter.format(data)
          }
        },
        {
          data: 'quantity'
        },
        {
          data: 'link',
          render: function(data) {
            return `<a href="${data}" target="_blank"> ${data.substring(0,50)}...</a>`
          }
        },
        {
          data: 'create'
        },
        {
          data: 'start_count'
        },
        {
          data: 'remains'
        },
        {
          data: 'status',
          render: function(data) {

            const type = {
              'Pending': 'default',
              'In progress': 'warning',
              'Completed': 'success',
              'Partial': 'info',
              'Processing': 'secondary',
              'Canceled': 'danger'
            };

            return `<span class="btn btn-${type[data]}">${data}</span>`
          }
        },
      ],
      "language": {
        "sEmptyTable": "không có dữ liệu trong bảng",
        "sInfo": "Hiển thị _START_ đến _END_ trong tổng _TOTAL_ mục",
        "sInfoEmpty": "Hiển thị 0 đến 0 trong tổng 0 mục",
        "sInfoFiltered": "(filtered from _MAX_ total entries)",
        "sInfoPostFix": "",
        "sInfoThousands": ",",
        "sLengthMenu": "Hiển thị _MENU_ mục",
        "sLoadingRecords": "Loading...",
        "sProcessing": "Đang xử lý...",
        "sSearch": "Tìm kiếm nhanh:",
        "sZeroRecords": "Không tìm thấy kết quả tìm kiếm",
        "oPaginate": {
          "sFirst": "Trang đầu",
          "sLast": "Trang cuối",
          "sNext": "Trang kế tiếp",
          "sPrevious": "Trang sau"
        },
        "oAria": {
          "sSortAscending": ": kích hoạt để sắp xếp cột tăng dần",
          "sSortDescending": ": kích hoạt để sắp xếp cột giảm dần"
        }
      }
    });
  });
</script>