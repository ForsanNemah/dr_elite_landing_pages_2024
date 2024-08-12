<script>

//alert("hello");

// Function to set a cookie
function setCookie(cname, cvalue, exhours) {
  const d = new Date();
  d.setTime(d.getTime() + (exhours * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Function to get the value of a cookie
function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Example usage
let cookieName = "can";
let cookieValue = "1";
let expirationHours = 24; // Cookie will expire in 24 hours

// Set the cookie


// Check if the cookie exists
let cookieFound = getCookie(cookieName);
if (cookieFound != "") {
  console.log("Cookie found!");
} else {
  console.log("Cookie not found.");
  setCookie(cookieName, cookieValue, expirationHours);
}
 




</script>