<script>
  $(document).ready(function() {

    var key = '6LcLFLcjAAAAAKq67doxxe0Bk8akrQdFHOYcGdht';

    function loadScript() {
      var script = document.createElement('script');
      script.src = 'https://www.google.com/recaptcha/api.js';
      script.async = true;

      script.onload = function() {
        grecaptcha.ready(function() {
          grecaptcha.render('captcha_id', {
            'sitekey': key
          });
        });
      };

      document.body.appendChild(script);
    };

    $("#pole").one("click", function() {
      loadScript();
    });

  });
</script>


<?php $scripts = [
  'jquery.easing.1.3.js', 'bootstrap.min.js', 'jquery.scrollTo.min.js',
  'jquery.localScroll.min.js', 'jquery.viewport.mini.js', 'jquery.appear.js',
  'jquery.sticky.js', "jquery.parallax-1.1.3.js", 'jquery.fitvids.js',
  'owl.carousel.min.js', 'isotope.pkgd.min.js', 'imagesloaded.pkgd.min.js',
  'jquery.magnific-popup.min.js', 'wow.min.js', 'all.js', 'main.js', 'main_functions.js'
];

foreach ($scripts as $sc) { ?>
  <script type="text/javascript" src="<?= __BASE_URL__ . '/theme/js/' . $sc . '?v=' . time() ?>"></script>
<?php } ?>



<style>
  @import url('https://fonts.googleapis.com/css2?family=Snowburst+One&display=swap');

  body {
    margin: 0;
  }

  #top {
    position: relative;
    width: 100%;
  }



  .folower {
    position: absolute;
    top: 0;
    left: 0;
    width: 50px;
    height: 50px;
    background-image: url(<?= BASE_URL('img/hoa-mai.webp') ?>);
    background-size: cover;
    animation: animationSnow 4s ease-in-out infinite;
  }

  @keyframes animationSnow {
    0% {
      transform: translate(0, 0);
      opacity: 0;
    }

    50% {
      opacity: 1;
    }

    100% {
      opacity: 0;
      transform: translate(100px, 50vh);
    }
  }
</style>
<script>
  let container = document.getElementById('top');
  const count = 65;
  for (var i = 0; i < count; i++) {
    let leftSnow = Math.floor(Math.random() * container.clientWidth);
    let topSnow = Math.floor(Math.random() * container.clientHeight);
    let widthSnow = Math.floor(Math.random() * 20);
    let timeSnow = Math.floor((Math.random() * 5) + 5);
    let blurSnow = Math.floor(Math.random() * 7);
    let div = document.createElement('div');
    div.classList.add('folower');
    div.style.left = leftSnow + 'px';
    div.style.top = topSnow + 'px';
    div.style.width = widthSnow + 'px';
    div.style.height = widthSnow + 'px';
    div.style.animationDuration = timeSnow + 's';
    div.style.filter = "blur(" + blurSnow + "px)";
    container.appendChild(div);
  }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/63b2cd41c2f1ac1e202b3da5/1glp73ivi';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>