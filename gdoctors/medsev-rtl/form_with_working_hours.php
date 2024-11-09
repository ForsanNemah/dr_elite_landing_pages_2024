<div class="page-title-area page-title-two" id="register_form_id">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="page-title-item">
                <h2>احجز موعدك الآن</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Appointment -->
<section class="appointment-area-two">
    <div class="container">
        <div class="row align-items-center appointment-wrap-two">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                <div class="appointment-item appointment-item-two">
                    <div class="appointment-shape">
                        <img src="assets/img/appointment/3.png" alt="Shape">
                    </div>
                    <h2>عروض خاصة بالمسجلين عبر الموقع الإلكتروني</h2>
                    <span>احجز الآن وسيتم التواصل معكم في أسرع وقت</span>
                    <div class="appointment-form">
                        <form method="post" action="post_to_google_sheet.php" onsubmit="disableButton1()" >
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">الاسم</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="ادخل اسمك هنا">
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone">رقم الجوال</label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="ادخل رقم جوالك">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="service">اختر العيادة</label>
                                        <select id="service" name="service" class="form-control">
                                            <option> انقر هنا للاختيار</option>
                                            <option>    عيادة التجميل </option>
                                            <option>   عيادة الجلدية والليزر  </option>
                                            <option>   عيادة الاسنان  </option>
                                            <option>    عيادة الباطنية </option>
                                            <option>     عيادة النساء والولادة</option>
                                             
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn appointment-btn" id="submitBtn1" ">تسجيل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                <div class="appointment-item-two-right">
                    <div class="appointment-item-content">
                        <h2>ساعات العمل</h2>
                        <div class="content-one">
                            <ul>
                                <li>السبت</li>
                                <li>الأحد</li>
                                <li>الاثنين</li>
                                <li>الثلاثاء</li>
                                <li>الأربعاء</li>
                                <li>الخميس</li>
                            </ul>
                        </div>
                        <div class="content-two">
                            <ul>
                                <li>9:00 am - 8:00 pm</li>
                                <li>9:00 am - 8:00 pm</li>
                                <li>9:00 am - 8:00 pm</li>
                                <li>9:00 am - 8:00 pm</li>
                                <li>9:00 am - 8:00 pm</li>
                                <li>9:00 am - 8:00 pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function disableButton1() {
        const submitBtn = document.getElementById("submitBtn1");
        submitBtn.textContent = "جاري التسجيل";
        submitBtn.disabled = true;
    }
</script>
