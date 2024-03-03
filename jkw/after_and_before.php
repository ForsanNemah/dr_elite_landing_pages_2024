<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorized Gallery Section</title>
 
    <style>
        /* Custom CSS styling */
        /* Add your own custom styles here */
        .gallery-section {
            padding: 50px 0;
        }

        .gallery-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .filter-button-group {
            margin-bottom: 20px;
        }

        .filter-button {
            margin-right: 10px;
        }

        .gallery-item {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="gallery-heading">  حالات قبل وبعد  </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="btn-group filter-button-group" role="group">
                        <button class="btn btn-primary filter-button" data-filter="all">All</button>
                        <button class="btn btn-primary filter-button" data-filter="category1">Category 1</button>
                        <button class="btn btn-primary filter-button" data-filter="category2">Category 2</button>
                        <button class="btn btn-primary filter-button" data-filter="category3">Category 3</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 gallery-item" data-category="category1">
                    <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" alt="Image 1" class="img-fluid">
                </div>
                <div class="col-md-4 gallery-item" data-category="category2">
                    <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" alt="Image 2" class="img-fluid">
                </div>
                <div class="col-md-4 gallery-item" data-category="category3">
                    <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" alt="Image 3" class="img-fluid">
                </div>
                <!-- Add more gallery items as needed -->
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Filter gallery items when a filter button is clicked
            var filterButtons = document.querySelectorAll(".filter-button");
            var galleryItems = document.querySelectorAll(".gallery-item");

            filterButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var category = button.getAttribute("data-filter");

                    if (category === "all") {
                        galleryItems.forEach(function (item) {
                            item.style.display = "block";
                        });
                    } else {
                        galleryItems.forEach(function (item) {
                            var itemCategory = item.getAttribute("data-category");
                            if (itemCategory === category) {
                                item.style.display = "block";
                            } else {
                                item.style.display = "none";
                            }
                        });
                    }

                    // Add active class to the clicked button
                    filterButtons.forEach(function (btn) {
                        btn.classList.remove("active");
                    });
                    button.classList.add("active");
                });
            });
        });
    </script>
</body>

</html>