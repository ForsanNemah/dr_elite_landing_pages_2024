 
    <script>
        // JavaScript for updating sub-select options
        function updateSubServiceOptions() {
            const service = document.getElementById("service").value;
            const subservice = document.getElementById("subservice");

            // Clear previous options
            subservice.innerHTML = "<option value=''>اختر الخدمة الفرعية</option>";

            // Define sub-options for each service
            const options = {
                cosmetic: [
                    { value: "botox", text: "البوتكس" },
                    { value: "fillers", text: "الفيلرز" },
                    { value: "face-lift", text: "شد الوجه" }
                ],
                dermatology: [
                    { value: "laser", text: "إزالة الشعر بالليزر" },
                    { value: "acne-treatment", text: "علاج حب الشباب" },
                    { value: "skin-peeling", text: "تقشير البشرة" }
                ],
                dentistry: [
                    { value: "cleaning", text: "تنظيف الأسنان" },
                    { value: "whitening", text: "تبييض الأسنان" },
                    { value: "braces", text: "تقويم الأسنان" }
                ],
                internal: [
                    { value: "diabetes", text: "علاج السكري" },
                    { value: "hypertension", text: "علاج الضغط" },
                    { value: "checkup", text: "الفحص الدوري" }
                ],
                gynecology: [
                    { value: "pregnancy", text: "متابعة الحمل" },
                    { value: "infertility", text: "علاج العقم" },
                    { value: "regular-checkup", text: "الفحص الدوري للنساء" }
                ]
            };

            // Populate sub-select based on selected service
            if (service && options[service]) {
                options[service].forEach(option => {
                    const opt = document.createElement("option");
                    opt.value = option.value;
                    opt.textContent = option.text;
                    subservice.appendChild(opt);
                });
            }
        }

        function disableButton1() {
            const submitBtn = document.getElementById("submitBtn1");
            submitBtn.textContent = "جاري التسجيل";
            submitBtn.disabled = true;
        }
    </script>
</head>
<body>
    <div class="page-title-area page-title-two" id="register_form_id" data-aos="zoom-in-up" data-aos-duration="3000">
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
    <section class="appointment-area-two" data-aos="zoom-in-up" data-aos-duration="3000">
        <div class="container">
            <div class="row align-items-center appointment-wrap-two">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                    <div class="appointment-item appointment-item-two">
                        <div class="appointment-shape">
                            <!-- Add Shape Image if Needed -->
                        </div>
                        <h2>عروض خاصة بالمسجلين عبر الموقع الإلكتروني</h2>
                        <span>احجز الآن وسيتم التواصل معكم في أسرع وقت</span>
                        <div class="appointment-form">
                            <form method="post" action="post_to_google_sheet.php" onsubmit="disableButton1()">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">الاسم</label>
                                            <input required id="name" name="name" type="text" class="form-control" placeholder="ادخل اسمك هنا">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">رقم الجوال</label>
                                            <input required id="phone" name="phone" type="text" class="form-control" placeholder="ادخل رقم جوالك">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="service">اختر العيادة</label>
                                            <select required id="service" name="service" class="form-control" onchange="updateSubServiceOptions()">
                                                <option value="">انقر هنا للاختيار</option>
                                                <option value="cosmetic">عيادة التجميل</option>
                                                <option value="dermatology">عيادة الجلدية والليزر</option>
                                                <option value="dentistry">عيادة الأسنان</option>
                                                <option value="internal">عيادة الباطنية</option>
                                                <option value="gynecology">عيادة النساء والولادة</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="subservice">اختر الخدمة الفرعية</label>
                                            <select required id="subservice" name="subservice" class="form-control">
                                                <option value="">اختر العيادة أولاً</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn appointment-btn" id="submitBtn1">تسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <div class="appointment-item-two-right">
                        <div class="appointment-item-content">
                            <img src="images/times.jpg" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
