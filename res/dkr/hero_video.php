<div id="vid_div" class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="1.mp4" class="glightbox play-btn"   href="javascript:void(0)" onclick="runvid()"></a>

 
        </div>



        <script>

//alert("wwe");




function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

 



function doubleClickCenter() {
  var centerElement = document.elementFromPoint(window.innerWidth / 2, window.innerHeight / 2);
  
  var event = new MouseEvent('dblclick', {
    bubbles: true,
    cancelable: true,
    view: window,
    button: 0,
    buttons: 1,
    clientX: window.innerWidth / 2,
    clientY: window.innerHeight / 2,
    screenX: window.screenX + window.innerWidth / 2,
    screenY: window.screenY + window.innerHeight / 2
  });
  
  centerElement.dispatchEvent(event);
}





 
function runvid() {

 
  // Your code here
  //alert("Clicked!");



   
sleep(1000).then(() => {
  console.log('After sleep');
 
  doubleClickCenter();
  var buttons = document.getElementsByClassName('plyr__controls__item plyr__control');

 


  

});
 


   
}



 

        </script>