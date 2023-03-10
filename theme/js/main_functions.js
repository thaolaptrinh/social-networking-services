/*!
 * current-device v0.10.1 - https://github.com/matthewhudson/current-device
 * MIT Licensed
 */ !(function (n, e) {
  "object" == typeof exports && "object" == typeof module
    ? (module.exports = e())
    : "function" == typeof define && define.amd
    ? define([], e)
    : "object" == typeof exports
    ? (exports.device = e())
    : (n.device = e());
})(window, function () {
  return (function (n) {
    var e = {};
    function o(t) {
      if (e[t]) return e[t].exports;
      var r = (e[t] = { i: t, l: !1, exports: {} });
      return n[t].call(r.exports, r, r.exports, o), (r.l = !0), r.exports;
    }
    return (
      (o.m = n),
      (o.c = e),
      (o.d = function (n, e, t) {
        o.o(n, e) || Object.defineProperty(n, e, { enumerable: !0, get: t });
      }),
      (o.r = function (n) {
        "undefined" != typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(n, Symbol.toStringTag, { value: "Module" }),
          Object.defineProperty(n, "__esModule", { value: !0 });
      }),
      (o.t = function (n, e) {
        if ((1 & e && (n = o(n)), 8 & e)) return n;
        if (4 & e && "object" == typeof n && n && n.__esModule) return n;
        var t = Object.create(null);
        if (
          (o.r(t),
          Object.defineProperty(t, "default", { enumerable: !0, value: n }),
          2 & e && "string" != typeof n)
        )
          for (var r in n)
            o.d(
              t,
              r,
              function (e) {
                return n[e];
              }.bind(null, r)
            );
        return t;
      }),
      (o.n = function (n) {
        var e =
          n && n.__esModule
            ? function () {
                return n.default;
              }
            : function () {
                return n;
              };
        return o.d(e, "a", e), e;
      }),
      (o.o = function (n, e) {
        return Object.prototype.hasOwnProperty.call(n, e);
      }),
      (o.p = ""),
      o((o.s = 0))
    );
  })([
    function (n, e, o) {
      n.exports = o(1);
    },
    function (n, e, o) {
      "use strict";
      o.r(e);
      var t =
          "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (n) {
                return typeof n;
              }
            : function (n) {
                return n &&
                  "function" == typeof Symbol &&
                  n.constructor === Symbol &&
                  n !== Symbol.prototype
                  ? "symbol"
                  : typeof n;
              },
        r = window.device,
        i = {},
        a = [];
      window.device = i;
      var c = window.document.documentElement,
        d = window.navigator.userAgent.toLowerCase(),
        u = [
          "googletv",
          "viera",
          "smarttv",
          "internet.tv",
          "netcast",
          "nettv",
          "appletv",
          "boxee",
          "kylo",
          "roku",
          "dlnadoc",
          "pov_tv",
          "hbbtv",
          "ce-html",
        ];
      function l(n, e) {
        return -1 !== n.indexOf(e);
      }
      function s(n) {
        return l(d, n);
      }
      function f(n) {
        return c.className.match(new RegExp(n, "i"));
      }
      function b(n) {
        var e = null;
        f(n) ||
          ((e = c.className.replace(/^\s+|\s+$/g, "")),
          (c.className = e + " " + n));
      }
      function p(n) {
        f(n) && (c.className = c.className.replace(" " + n, ""));
      }
      function w() {
        i.landscape()
          ? (p("portrait"), b("landscape"), y("landscape"))
          : (p("landscape"), b("portrait"), y("portrait")),
          v();
      }
      function y(n) {
        for (var e = 0; e < a.length; e++) a[e](n);
      }
      (i.macos = function () {
        return s("mac");
      }),
        (i.ios = function () {
          return i.iphone() || i.ipod() || i.ipad();
        }),
        (i.iphone = function () {
          return !i.windows() && s("iphone");
        }),
        (i.ipod = function () {
          return s("ipod");
        }),
        (i.ipad = function () {
          var n =
            "MacIntel" === navigator.platform && navigator.maxTouchPoints > 1;
          return s("ipad") || n;
        }),
        (i.android = function () {
          return !i.windows() && s("android");
        }),
        (i.androidPhone = function () {
          return i.android() && s("mobile");
        }),
        (i.androidTablet = function () {
          return i.android() && !s("mobile");
        }),
        (i.blackberry = function () {
          return s("blackberry") || s("bb10");
        }),
        (i.blackberryPhone = function () {
          return i.blackberry() && !s("tablet");
        }),
        (i.blackberryTablet = function () {
          return i.blackberry() && s("tablet");
        }),
        (i.windows = function () {
          return s("windows");
        }),
        (i.windowsPhone = function () {
          return i.windows() && s("phone");
        }),
        (i.windowsTablet = function () {
          return i.windows() && s("touch") && !i.windowsPhone();
        }),
        (i.fxos = function () {
          return (s("(mobile") || s("(tablet")) && s(" rv:");
        }),
        (i.fxosPhone = function () {
          return i.fxos() && s("mobile");
        }),
        (i.fxosTablet = function () {
          return i.fxos() && s("tablet");
        }),
        (i.meego = function () {
          return s("meego");
        }),
        (i.cordova = function () {
          return window.cordova && "file:" === location.protocol;
        }),
        (i.nodeWebkit = function () {
          return "object" === t(window.process);
        }),
        (i.mobile = function () {
          return (
            i.androidPhone() ||
            i.iphone() ||
            i.ipod() ||
            i.windowsPhone() ||
            i.blackberryPhone() ||
            i.fxosPhone() ||
            i.meego()
          );
        }),
        (i.tablet = function () {
          return (
            i.ipad() ||
            i.androidTablet() ||
            i.blackberryTablet() ||
            i.windowsTablet() ||
            i.fxosTablet()
          );
        }),
        (i.desktop = function () {
          return !i.tablet() && !i.mobile();
        }),
        (i.television = function () {
          for (var n = 0; n < u.length; ) {
            if (s(u[n])) return !0;
            n++;
          }
          return !1;
        }),
        (i.portrait = function () {
          return screen.orientation &&
            Object.prototype.hasOwnProperty.call(window, "onorientationchange")
            ? l(screen.orientation.type, "portrait")
            : i.ios() &&
              Object.prototype.hasOwnProperty.call(window, "orientation")
            ? 90 !== Math.abs(window.orientation)
            : window.innerHeight / window.innerWidth > 1;
        }),
        (i.landscape = function () {
          return screen.orientation &&
            Object.prototype.hasOwnProperty.call(window, "onorientationchange")
            ? l(screen.orientation.type, "landscape")
            : i.ios() &&
              Object.prototype.hasOwnProperty.call(window, "orientation")
            ? 90 === Math.abs(window.orientation)
            : window.innerHeight / window.innerWidth < 1;
        }),
        (i.noConflict = function () {
          return (window.device = r), this;
        }),
        i.ios()
          ? i.ipad()
            ? b("ios ipad tablet")
            : i.iphone()
            ? b("ios iphone mobile")
            : i.ipod() && b("ios ipod mobile")
          : i.macos()
          ? b("macos desktop")
          : i.android()
          ? i.androidTablet()
            ? b("android tablet")
            : b("android mobile")
          : i.blackberry()
          ? i.blackberryTablet()
            ? b("blackberry tablet")
            : b("blackberry mobile")
          : i.windows()
          ? i.windowsTablet()
            ? b("windows tablet")
            : i.windowsPhone()
            ? b("windows mobile")
            : b("windows desktop")
          : i.fxos()
          ? i.fxosTablet()
            ? b("fxos tablet")
            : b("fxos mobile")
          : i.meego()
          ? b("meego mobile")
          : i.nodeWebkit()
          ? b("node-webkit")
          : i.television()
          ? b("television")
          : i.desktop() && b("desktop"),
        i.cordova() && b("cordova"),
        (i.onChangeOrientation = function (n) {
          "function" == typeof n && a.push(n);
        });
      var m = "resize";
      function h(n) {
        for (var e = 0; e < n.length; e++) if (i[n[e]]()) return n[e];
        return "unknown";
      }
      function v() {
        i.orientation = h(["portrait", "landscape"]);
      }
      Object.prototype.hasOwnProperty.call(window, "onorientationchange") &&
        (m = "orientationchange"),
        window.addEventListener
          ? window.addEventListener(m, w, !1)
          : window.attachEvent
          ? window.attachEvent(m, w)
          : (window[m] = w),
        w(),
        (i.type = h(["mobile", "tablet", "desktop"])),
        (i.os = h([
          "ios",
          "iphone",
          "ipad",
          "ipod",
          "android",
          "blackberry",
          "macos",
          "windows",
          "fxos",
          "meego",
          "television",
        ])),
        v(),
        (e.default = i);
    },
  ]).default;
});

$("#category").on("change", function () {
  var selected = this.value;
  dataString = "action=get-services&category-id=" + selected;
  $.ajax({
    type: "POST",
    url: window.base_url + "requests",
    data: dataString,
    cache: false,
    beforeSend: function () {
      var text = "Loading..";
      $("#service").html("<option disabled selected>" + text + "</option>");
    },
    success: function (data) {
      if (data.data) {
        var text = "Ch???n d???ch v???";
        $("#service").html("<option disabled selected>" + text + "</option>");
        $("#service").append(data.data);
      } else {
        $("#service").html(
          '<option selected="true" style="display:none;">??ang c???p nh???t</option>'
        );
      }
    },
  });
});

function getBalance() {
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "VND",
    minimumFractionDigits: 0,
  });

  dataString = "action=get-user-balance";
  $.ajax({
    type: "POST",
    url: window.base_url + "requests",
    data: dataString,
    cache: false,
    success: function (data) {
      if (data.balance) {
        $("#user-balance").html(formatter.format(data.balance));
        $("#current-balance").html(formatter.format(data.balance));
      }
    },
  });
}

function generateNewAPI() {
  dataString = "action=generate-new-api";
  $.ajax({
    type: "POST",
    url: window.base_url + "requests",
    data: dataString,
    cache: false,
    beforeSend: function () {
      var text = "Generate API KEY";
      $("#user-api").val(text);
    },
    success: function (data) {
      if (data.data) {
        $("#user-api").val(data.data);
      }
    },
  });
}

function selectService(ServiceID) {
  dataString = "action=select-service&service-id=" + ServiceID;
  $.ajax({
    type: "POST",
    url: window.base_url + "requests",
    data: dataString,
    cache: false,
    success: function (data) {
      if (data.data) {
        $("#min_quantity").html(data.data.min);
        $("#max_quantity").html(data.data.max);
        if (data.data.desc) {
          $("#service-description").html(data.data.desc);
        } else {
          $("#service-description").html("");
        }
      }
    },
  });
}

function nullQuantity() {
  $("#order_quantity").val(0);
  $("#new_order_price").val(0);
}

function removeQuantity() {
  $("#min_quantity").html("0");
  $("#max_quantity").html("0");
  $("#service-description").html("");
  $("#new_order_price").val(0);
  $("#order_amount").val(0);
  $("#order_quantity").val(0);
  $("#order_link").val("");
  $("#description").fadeOut();
}

function updatePrice(ServiceID, Quantity) {
  var dataString =
    "action=get-price&service-id=" + ServiceID + "&quantity=" + Quantity;
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "VND",
    minimumFractionDigits: 0,
  });
  if (Quantity > 0) {
    $.ajax({
      type: "POST",
      url: window.base_url + "requests",
      data: dataString,
      cache: false,
      success: function (data) {
        if (data.data) {
          $("#new_order_price").val(formatter.format(data.data.charge));
          $("#order_amount").val(data.data.charge).trigger("change");
        }
      },
    });
  } else {
    $("#new_order_price").val(0);
    $("#order_amount").val(0).trigger("change");
  }
}

$(document).ready(function () {
  $(".payment_system").on("click", function () {
    var system = $(this).find("input").val();
    $(document)
      .find(".payment_system_tab")
      .each(function (i) {
        if ($(this).attr("id") == "tab" + system) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    $(".payment_system_tab input[name=amount]").val("0");
    $(".payment_system_tab .amount_vnd").text(0);
    $(".payment_error").hide();
  });

  $(".payment_system_tab input[name=amount]").on(
    "change paste input focusout",
    function () {
      const formatter = new Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "VND",
        minimumFractionDigits: 0,
      });

      var amount = this.value.replace(/,/, ".");
      var amount_vnd = 0;
      if (
        !isNaN(parseFloat(amount)) &&
        amount != 0 &&
        amount != "" &&
        amount != false
      ) {
        amount_vnd = formatter.format(amount);
      }
      $(".amount_vnd").text(amount_vnd);
      $(".payment_system_tab input[name=amount_vnd]").val(amount_vnd);
    }
  );
  $(".form_amount").on("focusin", function () {
    var val = $(this).val();
    var val_clear = parseFloat(val.replace(/,/, "."));
    if (val_clear == 0) {
      val_clear = "";
    }
    $(this).val(val_clear);
  });
  $(".form_amount").on("focusout", function () {
    var val = $(this).val();
    var val_clear = parseFloat(val.replace(/,/, "."));
    if (val == 0) {
      val_clear = "0";
    }
    $(this).val(val_clear + "");
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
});
