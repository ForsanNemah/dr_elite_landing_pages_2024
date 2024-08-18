<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Create the iframe-container div
    var iframeContainer = document.createElement('div');

    // Set the CSS styles for the iframe-container
    iframeContainer.style.position = 'relative';
    iframeContainer.style.width = '100%';
    iframeContainer.style.paddingBottom = '56.25%';
    iframeContainer.style.height = '0';
    iframeContainer.style.overflow = 'hidden';

    // Create the iframe element
    var iframe = document.createElement('iframe');
    iframe.setAttribute('allowfullscreen', '');
    iframe.src = 'https://clp.ksa-ads.com/classone/class-one.php';
    iframe.frameBorder = '0';

    // Set the CSS styles for the iframe
    iframe.style.position = 'absolute';
    iframe.style.top = '0';
    iframe.style.left = '0';
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = '0';

    // Append the iframe to the container
    iframeContainer.appendChild(iframe);

    // Append the container to the document body
    document.body.appendChild(iframeContainer);

    console.log('Page has finished loading!');
});

// Alternative to addEventListener for older browsers
if (document.attachEvent) {
    document.attachEvent('onreadystatechange', function() {
        if (document.readyState === 'complete') {
            // Your code here
        }
    });
} else {
    document.addEventListener('DOMContentLoaded', function() {
        // Your code here
    });
}

  </script>



