<video id="video" width="640" controls></video>
<script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.2/shaka-player.compiled.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const video = document.getElementById('video');
        const player = new shaka.Player(video);

        try {
            await player.load('https://yourserver.com/secure/video.mpd'); // رابط ملف الفيديو DASH
        } catch (e) {
            console.error('Error loading video:', e);
        }
    });
</script>
