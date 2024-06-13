
<!DOCTYPE html>















<html>
<head>

  <title>Landing Page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
  <style>
    @keyframes slideInFromLeft {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }
  </style>




<script>
		!function (w, d, t) {
		  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
		
		  ttq.load('CL0JPRRC77U115KEHRE0');
		  ttq.page();
		}(window, document, 'ttq');
	</script>



<script>
var event_phn="966568430828";
var event_email="info@wmc-ksa.com";

(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', ' aa10b33a-1621-44ed-b469-ec4e1373d01e');
snaptr('init', 'a699aaca-bb4b-4ec1-bd76-5081ea0a0eea');

snaptr('track', 'PAGE_VIEW');
 
 







    </script>





</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="logo.png" alt="Brand Logo" width="100" height="100">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 text-center">
        <a href="https://api.whatsapp.com/send?phone=966596945937&text=%D8%A7%D9%84%D8%A7%D8%B4%D8%AA%D8%B1%D8%A7%D9%83%20%D9%81%D9%8A%20%D8%AE%D8%AF%D9%85%D8%A9%20%D8%A7%D8%B1%D8%B3%D8%A7%D9%84%20%D8%A7%D9%84%D8%B9%D8%B1%D9%88%D8%B6%20" class="btn btn-success d-block mb-2 animated-button" >واتساب فرع اليرموك </a>
        <a href="https://api.whatsapp.com/send?phone=966596945937&text=%D8%A7%D9%84%D8%A7%D8%B4%D8%AA%D8%B1%D8%A7%D9%83%20%D9%81%D9%8A%20%D8%AE%D8%AF%D9%85%D8%A9%20%D8%A7%D8%B1%D8%B3%D8%A7%D9%84%20%D8%A7%D9%84%D8%B9%D8%B1%D9%88%D8%B6%20" class="btn btn-success d-block animated-button">واتساب فرع النسيم </a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
              $sliderPath = 'slider/';
              $sliderImages = scandir($sliderPath);
              $sliderImages = array_diff($sliderImages, array('.', '..'));

              $active = true;
              foreach ($sliderImages as $image) {
                echo '<div class="carousel-item ';
                echo ($active) ? 'active' : '';
                echo '">';
                echo '<img src="' . $sliderPath . $image . '" class="d-block w-100" alt="' . $image . '">';
                echo '</div>';

                $active = false;
              }
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var buttons = document.querySelectorAll(".animated-button");
      buttons.forEach(function(button) {
        button.classList.add("animate__animated", "animate__slideInLeft");
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>