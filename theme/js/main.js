$(document).ready(function () {
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "VND",
    minimumFractionDigits: 0,
  });

  $("#user-balance").html(formatter.format($("#user-balance").html()));
  $("#current-balance").html(formatter.format($("#current-balance").html()));

  getBalance();
});

function TakeFormData(FormID, FormAction, Clear, Timeout, Highlight, Out) {
  var formData = $(FormID).serialize();
  var dataString = formData + "&action=" + FormAction;
  var $btn_submit = $(FormID).find("input[type=submit]");
  var btn_submit_text = $btn_submit.val();
  Clear = Clear || true;
  Timeout = Timeout || 0;
  Highlight = Highlight || false;
  Out = Out || false;
  if ($(FormID + "-result").length === 0) {
    if (Out == true)
      $(FormID)
        .parent()
        .after("<div id='" + FormAction + "-result'></div>");
    else $(FormID).append("<div id='" + FormAction + "-result'></div>");
  }
  $.ajax({
    type: "POST",
    url: window.base_url + "requests",
    data: dataString,
    cache: false,
    beforeSend: function () {
      $("#" + FormAction + "-result").val("Đang xử lý ...");
      $btn_submit.attr("disabled", true).val("Đang xử lý ...");
    },
    success: function (data) {
      if (FormAction == "login") {
        window.grecaptcha.reset();
        if (data.status) {
          window.location.href = base_url + "order";
        }
      }

      if (FormAction == "register" || FormAction == "restore") {
        window.grecaptcha.reset();
      }

      if (data) {
        if (Highlight == false) {
          $("#" + FormAction + "-result").html(
            `<div class="text-${
              data.status ? "success" : "danger"
            }" style="font-size: 15px; font-weight:700;">${data.msg}</div>`
          );
        } else {
          $("#" + FormAction + "-result").html(
            `<div class="text-${
              data.status ? "success" : "danger"
            }" style="font-size: 15px; font-weight:700;"><mark>
            ${data.msg}
              </mark></div>`
          );
        }

        if (Clear == true) {
          if (data.status == true) {
            if (FormAction == "new-order") {
              $("#new_order_price").val("");
              $("#order_link").val("");
              $("#order_quantity").val("");
            } else {
              $(FormID).trigger("reset");
              $("select").prop("selectedIndex", 0);
            }
          }
        }
      }

      if (Timeout != 0) {
        $("#" + FormAction + "-result")
          .delay(5000)
          .fadeOut(Timeout, function () {
            this.remove();
          });
      }
    },
    complete: function () {
      $btn_submit.attr("disabled", false).val(btn_submit_text);
    },
  });
}

function login() {
  TakeFormData("#login", "login", true, 3000);
}

function register() {
  TakeFormData("#register", "register", true, 3000);
}
function restore() {
  TakeFormData("#restore", "restore", true);
}
function lock() {
  TakeFormData("#lock", "lock", true, 3000, true, true);
}

function newOrder() {
  TakeFormData("#new-order", "new-order", true, 3000);
  getBalance();
}

function updatePassword() {
  TakeFormData("#update-password", "update-password", true, 3000);
}
