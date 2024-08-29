<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Section</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        video {
            width: 100%; /* Ensure video fills the card width */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <?php
        $videoDir = 'kayan/';
        $videos = array_diff(scandir($videoDir), array('.', '..'));

        $count = 0; // To track the number of videos in the row

        foreach ($videos as $video) {
            $videoPath = $videoDir . $video;
            if ($count % 3 == 0 && $count != 0) {
                echo '</div><div class="row">'; // Close the current row and start a new one
            }
            ?>
            <div class="mb-4 col-4 col-sm-6 col-md-4">
                <div class="card">
                    <video controls class="card-img-top" preload="metadata">
                        <source src="<?php echo $videoPath; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo pathinfo($video, PATHINFO_FILENAME); ?></h5>
                    </div>
                </div>
            </div>
            <?php
            $count++;
        }
        ?>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
