<?php include("header.php"); ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #000; /* Black background */
        margin: 0;
        padding: 0;
        overflow-y: scroll; /* Enable vertical scrolling */
        height: 100%; /* Ensure the body takes full height */
    }

    .video-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 40px;
        position: relative;
        z-index: 2;
    }

    .video-container {
        background: rgba(255, 255, 255, 0.9);
        width: 45%;
        max-width: 400px;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        cursor: pointer;
    }

    .video-container:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 18px rgba(0, 0, 0, 0.3);
    }

    .video-container h3 {
        font-size: 1.3rem;
        color: #444;
        margin-bottom: 15px;
        font-weight: bold;
    }

    /* Disable interactions with video preview */
    .video-container video {
        width: 100%;
        border-radius: 12px;
        pointer-events: none; /* Prevent clicking on the video itself */
    }

    /* Modal Styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        position: relative;
        background: white;
        padding: 15px;
        border-radius: 10px;
        max-width: 80%;
        width: 600px;
        text-align: center;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
        color: #555;
        z-index: 200;
    }

    .close-btn:hover {
        color: red;
    }

    #popupVideo {
        width: 100%;
        border-radius: 10px;
    }

    @media only screen and (max-width: 600px) {
        .video-container {
            width: 90%;
        }

        .modal-content {
            width: 90%;
        }
    }
</style>

<div class="video-section">
    <?php 
    $videos = [
        "Home.mp4" => "How to behave in the home",
        "Food Habits.mp4" => "Healthy Food Habits",
        "Mobile Usage.mp4" => "Limitations in use of Mobiles",
        "Respecting Elders.mp4" => "Respecting Elders",
        "Road Safety.mp4" => "Road Safety Rules"
    ];

    $video_folder = "videos/";

    foreach ($videos as $filename => $title) {
        $video_path = $video_folder . $filename;
        echo '<div class="video-container" onclick="openModal(\'' . $video_path . '\')">
                <h3>' . $title . '</h3>
                <video preload="auto" muted>
                    <source src="' . $video_path . '" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
              </div>';
    }
    ?>
</div>

<!-- Video Popup Modal -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <video id="popupVideo" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<script>
    function openModal(videoSrc) {
        var videoElement = document.getElementById("popupVideo");
        var sourceElement = document.getElementById("videoSource");

        sourceElement.src = videoSrc; // Set the video source
        videoElement.load(); // Load the video
        videoElement.play(); // Play the video

        document.getElementById("videoModal").style.display = "flex"; // Show the modal
    }

    function closeModal() {
        var modal = document.getElementById("videoModal");
        var video = document.getElementById("popupVideo");

        modal.style.display = "none"; // Hide the modal
        video.pause(); // Pause the video
        video.currentTime = 0; // Reset the video
    }
</script>
