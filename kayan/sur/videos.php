 
    <div class="container mt-5">
        <div class="row" id="video-section">
            <?php
            $videoFolder = 'kayan';
            $videos = array_diff(scandir($videoFolder), array('.', '..'));

            foreach ($videos as $video) {
                $videoPath = $videoFolder . '/' . $video;
                echo '<div class="mb-4 col-md-4">';
                echo '<div class="card">';
                echo '<video class="card-img-top" controls>';
                echo '<source src="' . $videoPath . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '<div class="card-body">';
                echo '<p hidden class="card-text">' . htmlspecialchars($video) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
 
 
