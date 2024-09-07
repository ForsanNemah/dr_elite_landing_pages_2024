<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Switcher</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body.rtl {
            direction: rtl;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1 id="pageTitle">Welcome!</h1>
            <select id="languageSwitcher" onchange="showSelectedLanguage()"  class="form-select" style="width: 150px;">
                <option value="en" selected>English</option>
                <option value="ar">العربية</option>
            </select>
        </div>

        <p id="pageContent">This is a simple Bootstrap page with language switching functionality.</p>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    
    <script>
        const languageSwitcher = document.getElementById('languageSwitcher');
        const pageTitle = document.getElementById('pageTitle');
        const pageContent = document.getElementById('pageContent');
        
        languageSwitcher.addEventListener('change', function() {
            if (this.value === 'ar') {
                document.body.classList.add('rtl');
                pageTitle.innerText = 'مرحبا!';
                pageContent.innerText = 'هذه صفحة بسيطة بتبديل اللغة باستخدام Bootstrap.';
            } else {
                document.body.classList.remove('rtl');
                pageTitle.innerText = 'Welcome!';
                pageContent.innerText = 'This is a simple Bootstrap page with language switching functionality.';
            }
        });
    </script>













<script>
    function showSelectedLanguage() {
        const languageSwitcher = document.getElementById('languageSwitcher');
        const selectedLanguage = languageSwitcher.value;
        alert('Selected language: ' + selectedLanguage);
    }
</script>











</body>

</html>
