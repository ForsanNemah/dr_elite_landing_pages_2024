 
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: right;
            margin: 0px;
        }

        .header {
            text-align: left;
        }

        .header img {
            width: 100px;
        }

        .contract {
            border: 0px solid #000;
            padding: 0px;
            border-radius: 0px;
        }
    </style>
 













    <div class="container">


    <div class="row">
  <div class="col text-center" style="margin-top: 100px ;">
    
  <h6>


شركة قمة الانتشار للتسويق الالكتروني 

<br>
سجل تجاري رقم 2053126009
</h6>
 

  </div>
  <div class="col text-center">


  <img src="logo2.png" class="img-fluid" alt="Responsive image">


<h3>


اتفاقية تقديم خدمات تسويقية


</h3>
    </div>
   
  <div class="col text-center" style="margin-top: 100px ;">
  

  <h6>


المملكة العربية السعودية

<br>
الخبر-الخبر الشمالية
</h6>


  
</div>


  





        <div class="contract">
             
            <p><strong>التاريخ:</strong> 
        
        
        <?php echo $contract_date;?>
        
        </p>
            <p><strong>رقم الاتفاقية:</strong>
        
        
            <?php echo $contract_id;?>
        
        
        </p>
            <p>

            بعون الله تعالى وتوفيقة 
انه وبتاريخ 

<?php echo $contract_date_h;?> هجري 
الموافق 
<?php echo $contract_date;?>

تم توقيع هذه الاتفاقية بين كلا من




<div class="contact-info mt-4">
                <div><strong>الطرف الأول:</strong> 
                
                شركة قمة الإنتشار   للخدمات التسويقية سجل تجاري رقم (2053126009) ومقرها
                    الرئيسي في المملكة العربية السعودية - الخبر. ويمثلها فيما يخص هذه الاتفاقية ( فهد الخالدي)



                </div>
                <div><strong>البريد الإلكتروني:</strong>info@intshar.com</div>
                <div><strong>رقم الجوال:</strong>966539811400</div>
            </div>
            <div contenteditable="true" class="contact-info mt-3">
                <div contenteditable="true"><strong>الطرف الثاني:</strong>   <?php echo $company_name;?> سجل تجاري رقم (<?php echo $company_id;?>) ومقرها الرئيسي في <?php echo $address;?>
                    ويمثلها فيما يخص هذه الاتفاقية ( <?php echo $customer_name;?> )</div>
                <div><strong>البريد الإلكتروني:</strong> <?php echo $email;?></div>
                <div><strong>رقم الجوال:</strong><?php echo $phone;?></div>
            </div>








                حيث أن الطرف الأول والطرف الثاني اتفقا وهما بكامل الرضا والأهلية المعتبرة شرعًا ونظامًا على إبرام هذه
                الاتفاقية وفق الشروط الواردة أدناه.
            </p>
            <h2 class="h5">أولاً: يعتبر هذا التمهيد جزء لا يتجزأ من الاتفاقية</h2>
            <h2 class="h5">ثانيًا: الخدمات محل الاتفاقية</h2>
            <ol>


               



<?php include "get_services.php"; ?>

 
                 



            </ol>
           

            <h2 class="h5 mt-4">ثالثاً: التزامات الطرف الثاني</h2>
            <ul>
                <li>يلتزم الطرف الثاني بتعيين مسؤول تواصل دائم مع الطرف الأول في مدة أقصاها 2 يوم عمل من توقيع
                    الاتفاقية.</li>
                <li>تقديم المصادر المساعدة اللازمة لإنجاز العمل للطرف الأول في مدة أقصاها 2 يوم عمل من توقيع الاتفاقية.
                </li>
                <li>اعتماد الأعمال المرسلة للطرف الأول في مدة أقصاها 2 يوم عمل.</li>
            </ul>

            <h2 class="h5 mt-4">رابعاً: مدة الاتفاقية</h2>
            <p contenteditable="true">اتفق الطرفان على أن تكون مدة الاتفاقية شهر ميلادي واحد اعتبارًا من تاريخ   <?php echo $contract_date;?>.</p>

            <h2 class="h5 mt-4">خامساً: قيمة الانفاقية و آلية السداد</h2>
            <p contenteditable="true">اتفق الطرفان على أن تكون قيمة الدفع الشهرية مقدماً وذلك بما يعادل مبلغ وقدره <?php echo $cost;?> ريال سعودي، كتابة (فقط
            <?php echo $cost_string;?> ريال لا غير).</p>

            <h2 class="h5 mt-4">سادساً: فسخ الاتفاقية</h2>
            <ul>
                <li contenteditable="true">في حال رغب أحد الطرفين فسخ الاتفاقية، يلتزم بإخطار الطرف الآخر وذلك قبل 14 يوماً من تاريخ الدفع
                    التالية مع التسبب بتسديد جميع المستحقات المالية إن وجدت للطرف الأول.</li>
                <li contenteditable="true">يجوز فسخ الاتفاقية في حال قيام أحد الطرفين بالإخلال بأحد بنودها، إذا استمر ذلك الإخلال بعد إخطاره
                    كتابياً لمدة 10 أيام من قبل الطرف الآخر.</li>
                <li>إذا أفلس الطرف الثاني أو أصبح في حكم المفلس طبقا لنظام المحكمة، مع تقديم الوثائق التي تثبت ذلك.</li>
            </ul>

            <h2 class="h5 mt-4">سابعاً: إرجاع الأرقام السرية</h2>
            <p contenteditable="true">
                يلتزم الطرف الأول بتسليم جميع الأرقام السرية الخاصة بالحسابات المتفق عليها فور إنهاء هذه الاتفاقية، ويجب
                على الطرف الثاني تغيير الأرقام السرية الخاصة بحسابات التواصل الاجتماعي المتفق عليها بعد استلامها من
                الطرف الأول خلال مدة لا تزيد عن 48 ساعة من إنهاء الاتفاقية.
            </p>

            <h2 class="h5 mt-4">ثامناً: أحكام عامة</h2>
            <ul>
                

         <li>في حال تأخر الطرف الثاني بالرد على الطرف الأول، فإن الطرف الأول لا يتحمل مسؤولية أي تأخير في تسليم الأعمال. كما للطرف الأول الحق في تحديد تاريخ التسليم الجديد.</li> <li>إذا تعذر التواصل مع الطرف الثاني أو عدم استجابته لمدة 15 يوم عمل، فإن هذه الاتفاقية تصبح سارية المفعول والطرف الأول مستحق للدفعات المتبقية.</li> <li>يحق للطرف الثاني إجراء تعديلات غير جذرية على التصاميم مرة واحدة فقط.</li> <li>لا تشمل هذه الاتفاقية أي مبالغ خاصة بالإعلانات على منصات التواصل الاجتماعي، والتي يتحملها الطرف الثاني.</li> <li>لا يلتزم الطرف الأول بتقديم خدمات إضافية غير مذكورة في الاتفاقية، ويتم الاتفاق على أي خدمات إضافية بشكل منفصل.</li> <li>يحق للطرف الأول نشر الأعمال المذكورة في البند الثاني من الاتفاقية في أي وسيلة تواصل تابعة له.</li> <li>سداد الطرف الثاني للقسط الأول يعتبر قبولاً لكافة شروط وأحكام هذه الاتفاقية.</li>

            </ul>

            <h2 class="h5 mt-4">تاسعاً: طريقة التواصل</h2>
            <p>
                يكون البريد الإلكتروني أو الواتساب للطرف الأول ومسؤول المتابعة لدى الطرف الثاني هو الوسيلة الرسمية
                للتعامل بين الطرفين.
            </p>









            <h2 class="h5 mt-4">عاشرا: التوقيع  </h2>
            <p>
                
            </p>








        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
 

<style>


    body{


        font-family: 'Tajawal', sans-serif;
                                                
        
    }
</style>