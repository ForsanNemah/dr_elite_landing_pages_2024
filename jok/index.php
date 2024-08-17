<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Call Example</title>
    <!-- إضافة Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* لجعل الزر في المنتصف */
        .d-flex {
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        /* جعل النص داخل الـ textarea من اليمين إلى اليسار */
        #desOutput {
            direction: rtl;
            text-align: right;
            width: 100%; /* جعل العرض 100% لضمان الاستجابة */
            max-width: 100%; /* تحديد العرض الأقصى 100% لمنع تجاوز الحاوية */
            box-sizing: border-box; /* لضمان أن الحواف تحسب داخل العرض */
        }
        /* لتحسين المسافة بين الأزرار */
        .button-container {
            margin-bottom: 15px; /* المسافة بين الأزرار */
        }
    </style>
</head>
<body>

<div class="container d-flex">
    <div class="text-center w-100">
        <!-- حقل النص لعرض نتيجة "des" -->
        <textarea id="desOutput" class="mb-3 form-control" rows="4" readonly placeholder="سيتم عرض النتيجة هنا"></textarea>
        
        <!-- زر النسخ أعلاه -->
        <div class="button-container">
            <button id="copyButton" class="btn btn-secondary" disabled>نسخ</button>
        </div>
        
        <!-- زر جلب البيانات -->
        <button id="apiButton" class="btn btn-primary">اضغط هنا لجلب البيانات</button>
    </div>
</div>

<!-- إضافة jQuery و Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#apiButton').click(function() {
            // تغيير نص الزر إلى "Loading..." وتعطيل زر النسخ
            $(this).text('Loading...');
            $('#copyButton').attr('disabled', true);
            
            $.ajax({
                url: 'https://opensheet.elk.sh/1wxgygSsryRDhx72lw7vQoiJhPJW2fYY0i93d-25enWY/Sheet1',
                method: 'GET',
                success: function(data) {
                    // اختيار عنصر عشوائي
                    var randomItem = data[Math.floor(Math.random() * data.length)];
                    
                    // التحقق من وجود المفتاح "des" وعرضه في حقل النص
                    if (randomItem && randomItem.des) {
                        $('#desOutput').val(randomItem.des);
                    } else {
                        $('#desOutput').val('لم يتم العثور على مفتاح "des".');
                    }

                    // إعادة نص الزر إلى النص الأصلي وتمكين زر النسخ
                    $('#apiButton').text('اضغط هنا لجلب البيانات');
                    $('#copyButton').attr('disabled', false);
                },
                error: function(error) {
                    console.error(error);
                    alert('حدث خطأ أثناء جلب البيانات.');
                    // إعادة نص الزر إلى النص الأصلي وتمكين زر النسخ
                    $('#apiButton').text('اضغط هنا لجلب البيانات');
                    $('#copyButton').attr('disabled', false);
                }
            });
        });

        // وظيفة زر النسخ
        $('#copyButton').click(function() {
            var copyText = document.getElementById('desOutput');
            copyText.select();
            copyText.setSelectionRange(0, 99999); // للهواتف المحمولة

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'تم النسخ!' : 'فشل النسخ!';
                alert(msg);
            } catch (err) {
                alert('فشل النسخ!');
            }
        });
    });
</script>

</body>
</html>
