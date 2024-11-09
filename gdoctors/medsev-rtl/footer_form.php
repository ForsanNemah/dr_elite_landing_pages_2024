<form method="post" action="post_to_google_sheet.php" onsubmit="disableButton()">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="الاسم" required>
    </div>
    <div class="form-group">
        <input type="text" name="phone" class="form-control" placeholder="رقم الجوال" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="msg" rows="5" placeholder="الرسالة" required></textarea>
    </div>
    <div class="text-left">
        <button type="submit" class="btn feedback-btn" id="submitBtn">ارسال</button>
    </div>
</form>

<script>
    function disableButton() {
        const submitBtn = document.getElementById("submitBtn");
        submitBtn.textContent = "جاري التسجيل";
        submitBtn.disabled = true;
    }
</script>
