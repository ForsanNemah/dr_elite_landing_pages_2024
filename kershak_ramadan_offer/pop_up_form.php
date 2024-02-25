 <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          








        <form dir="rtl" method="post" action="post_to_google_sheet.php" id="id_form">
  <div class="form-group">
    <label for="exampleInputEmail1">  الاسم</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1"  placeholder=" الاسم" required>
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رقم الجوال </label>
    <input  name="phone" type="tel" class="form-control"  id="phn_id_of_popup"  placeholder="5xxxxxxxxxx" minlength="9" maxlength="9"  required>
  </div>

 
  <input id="submit_button_id" type="submit" value=" الحصول على كود الخصم " class="btn btn-primary" />

 
</form>

 














































































        




 

        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>




  <script>


$("#id_form").on("submit", function(){
   //alert("sss");
    
   $("#submit_button_id").val("يرجى الانتظار لثواني ");

   document.getElementById("submit_button_id").disabled = true;
    


   var event_phn=document.getElementById('phn_id_of_popup').value
 

 snaptr('track','SIGN_UP', {
 
 'user_phone_number': sha256("966"+event_phn)          
});


ttq.identify({

"phone_number":sha256("966"+event_phn)  // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.

});


ttq.track('CompleteRegistration', {});




//$('#exampleModal').modal('toggle');


   //alert("okkk");
   return true;
 })







  </script>
