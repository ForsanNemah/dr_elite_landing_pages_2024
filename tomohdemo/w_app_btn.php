 
    <style>
        /* Floating WhatsApp Button Style */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            left: 20px; /* Position on the left side */
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: zoomInOut 1.5s infinite; /* Apply animation */
        }

        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }

        /* Tooltip */
        .tooltip {
            position: absolute;
            bottom: 80px;
            left: 20px; /* Adjust tooltip position */
            background-color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .whatsapp-button:hover ~ .tooltip {
            visibility: visible;
            opacity: 1;
        }

        /* Zoom In and Out Animation */
        @keyframes zoomInOut {
            0%, 100% {
                transform: scale(1); /* Normal size */
            }
            50% {
                transform: scale(1.1); /* Slightly zoomed in */
            }
        }
    </style>
 

    <!-- WhatsApp Button -->
    <a
        href="https://wa.me/<?php echo $phone2 ?>?text=<?php  echo urldecode(" معلومات أكثر عن خدماتكم   ") ?>"
        target="_blank"
        class="whatsapp-button"
        aria-label="Chat with us on WhatsApp"
    >
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo">
    </a>

    <!-- Tooltip -->
    <div class="tooltip">Chat with us!</div>

 