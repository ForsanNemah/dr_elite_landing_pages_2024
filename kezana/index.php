
<!DOCTYPE html>















<html>
<head>

  <title> الخزانة الفريدة</title>

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

snaptr('init', 'f6c1d321-4efd-46e2-b4d3-eabdbb1d2ce2');

snaptr('track', 'PAGE_VIEW');
 
 



snaptr('track','SIGN_UP', {
  
        
});



    </script>


<link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
                

</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 text-center">
      <img src="logo.png" alt="Brand Logo" class="img-fluid">
    </div>
  </div>
</div>


    <div class="row">
      <div class=" text-center">
         <br>
     <h2>

الخزانة الفريدة


</h2>
      </div>
      
    </div>


    <div class="row mt-4">
      <div class="col-12 text-center">
        <a     onclick="open_store()"   class="btn btn-success d-block mb-2 animated-button" >     الحصول على العرض  عبر واتساب</a>
       
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


              echo '
              
              
              ';


              echo '<div class="text-center">';
              echo '<img src="' . $sliderPath . $image . '" class="img-fluid" alt="' . $image . '">';
              echo '</div>';




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


<script>


 

//open_store();
function open_store() {
  
  

  window.location.href = "https://api.whatsapp.com/send?phone=966599081837&text=%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A7%D9%83%D8%AB%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%B9%D8%B1%D8%B6%20";
}


function open_app() {
  //alert("open_app");
  snaptr('track','SIGN_UP', {
  
        
});

  let deviceType = detectDeviceType();

if (deviceType === 'android') {
  // Perform Android-specific actions
  console.log('This is an Android device');
  window.location.href = "https://play.google.com/store/apps/details?id=com.marvel.kaifalshiuokh&pcampaignid=web_share";
} else if (deviceType === 'ios') {
  // Perform iOS-specific actions
  console.log('This is an iOS device');
  window.location.href = "https://apps.apple.com/sa/app/%D9%83%D9%8A%D9%81-%D8%A7%D9%84%D8%B4%D9%8A%D9%88%D8%AE/id1498076181";
} else {
  // Perform web-specific actions
  console.log('This is a web browser');
  window.location.href = "https://www.kaifalshiuokh.com/";
}


}






function detectDeviceType() {
  let deviceType;

  // Detect Android devices
  if (/Android/i.test(navigator.userAgent)) {
    deviceType = 'android';
  }
  // Detect iOS devices
  else if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    deviceType = 'ios';
  }
  // Detect web browsers
  else {
    deviceType = 'web';
  }

  return deviceType;
}



</script>


<style>


 body{

  font-family: 'Tajawal', sans-serif;
                                                
 }

</style>