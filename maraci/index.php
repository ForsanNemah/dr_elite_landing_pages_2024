
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























<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1737226240068199');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID_HERE&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

















<script>
		!function (w, d, t) {
		  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
		
		  ttq.load('CL0JPRRC77U115KEHRE0');
      ttq.load('CPLOGCRC77U75I0QM52G');
		  ttq.page();
      ttq.track('CompleteRegistration', {});


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
 
snaptr('track', 'ADD_TO_CART');







    </script>





</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="logo.png" alt="Brand Logo" width="200" height="100">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 text-center">
        <a href="https://api.whatsapp.com/send?phone=966570050026&text=%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A3%D9%83%D8%AB%D8%B1%20" class="btn btn-success d-block mb-2 animated-button" > معلومات أكثر </a>
 
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