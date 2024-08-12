<script>



function createWhatsAppButton() {
      // Create the WhatsApp button element
      var button = document.createElement('a');
      button.href = 'https://api.whatsapp.com/send?phone=<your_phone_number>';
      button.target = '_blank';

      // Add the CSS styles to the button element
      button.style.position = 'fixed';
      button.style.bottom = '20px';
      button.style.right = '20px';
      button.style.backgroundColor = '#25d366';
      button.style.color = 'white';
      button.style.padding = '20px 26px';
      button.style.borderRadius = '50%';
      button.style.fontSize = '28px';
      button.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.3)';
      button.style.zIndex = '9999';
      button.style.transition = 'transform 0.3s ease';
      button.style.display = 'flex';
      button.style.alignItems = 'center';
      button.style.justifyContent = 'center';

      // Add the hover effect
      button.addEventListener('mouseover', function() {
        button.style.transform = 'scale(1.1)';
      });

      button.addEventListener('mouseout', function() {
        button.style.transform = 'scale(1)';
      });

      // Create the WhatsApp icon element
      var icon = document.createElement('i');
      icon.classList.add('fab', 'fa-whatsapp');
      icon.style.fontSize = '28px';
      icon.style.verticalAlign = 'middle';
      button.appendChild(icon);

      // Append the button to the body
      document.body.appendChild(button);

      // Add responsive styles
      addResponsiveStyles(button, icon);
    }

    // Function to add responsive styles
    function addResponsiveStyles(button, icon) {
      // Media query for smaller screens
      var mediaQuery = window.matchMedia('(max-width: 767px)');

      // Function to apply responsive styles
      function applyResponsiveStyles() {
        if (mediaQuery.matches) {
          button.style.bottom = '10px';
          button.style.right = '10px';
          button.style.padding = '18px 22px';
          button.style.fontSize = '24px';
          icon.style.fontSize = '24px';
        } else {
          button.style.bottom = '20px';
          button.style.right = '20px';
          button.style.padding = '20px 26px';
          button.style.fontSize = '28px';
          icon.style.fontSize = '28px';
        }
      }

      // Apply initial styles
      applyResponsiveStyles();

      // Listen for window resize events and apply responsive styles
      mediaQuery.addListener(applyResponsiveStyles);
    }

    // Load the Font Awesome JavaScript library
    var script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js';
    script.integrity = 'sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==';
    script.crossOrigin = 'anonymous';
    script.onload = function() {
      createWhatsAppButton();
    };
    document.head.appendChild(script);














  </script>