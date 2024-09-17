<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Professional Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .team-member {
            text-align: center;
            margin-bottom: 40px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .team-member img {
            width: 100%;
            max-width: 365px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-member h3 {
            font-size: 1.5rem;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #007bff;
        }
        .team-member p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .btn-custom {
            background-color: #28a745; /* لون أخضر للأزرار */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s;
        }
        .btn-custom i {
            margin-left: 5px;
        }
        .btn-custom:hover {
            background-color: #218838; /* لون أخضر أغمق عند التمرير */
        }
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background-color: #007bff;
            margin: 10px auto 0;
        }
    </style>
</head>
<body>
    <section class="container text-center mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">تعرف على فريقنا المهني</h2>
                <p class="lead">
                    كمدربين رئيسيين، وعلماء نفس، ومستشارين في المهارات الشخصية، وميسرين شاملين، نركز باستمرار على توجيه عملائنا للنجاح كقادة والتعامل بمهارة مع التغيير.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 team-member">
                <img src="path/to/your/image.jpg" alt="Team Member 1">
                <h3>عضو الفريق 1</h3>
                <p>وصف مختصر للعضو الأول في الفريق، يتحدث عن خبرته ومهاراته.</p>
                <button class="btn btn-custom"><i class="fas fa-info-circle"></i> اعرف المزيد</button>
            </div>
            <div class="col-md-4 team-member">
                <img src="path/to/your/image.jpg" alt="Team Member 2">
                <h3>عضو الفريق 2</h3>
                <p>وصف مختصر للعضو الثاني في الفريق، يتحدث عن خبرته ومهاراته.</p>
                <button class="btn btn-custom"><i class="fas fa-info-circle"></i> اعرف المزيد</button>
            </div>
            <div class="col-md-4 team-member">
                <img src="path/to/your/image.jpg" alt="Team Member 3">
                <h3>عضو الفريق 3</h3>
                <p>وصف مختصر للعضو الثالث في الفريق، يتحدث عن خبرته ومهاراته.</p>
                <button class="btn btn-custom"><i class="fas fa-info-circle"></i> اعرف المزيد</button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
