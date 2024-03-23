 
 
 
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>
</head>






<body>


 
<div id="qrcode" style="width:30%; height:30%; margin-top:15px;"></div>



<script>
 

 var res_qr;
$.ajax({
  url: "http://185.182.186.101:420/",
  method: "GET",
  dataType: "text",
  success: function(response) {
    console.log(response);
    res_qr=response;

    alert(response);



    var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	 
    alert(response);
	qrcode.makeCode(response);
}

makeCode();









  },
  error: function(error) {
    console.log(error);
    alert(error);
  }
});




 


 




</script>
</body>

