<script>




async function getPixelData() {
  try {
    const response = await fetch('https://opensheet.elk.sh/1oDQXyrvBOa5XTHzZA9x1q4Euh2SkZucPqB3up-JrF0Y/pixels');
    if (!response.ok) {
      throw new Error(`HTTP error ${response.status}`);
    }
    const data = await response.json();
    //alert(JSON.stringify(data, null, 2));
   


    var object_0= data[0];
    alert(object_0.snap);
    

 



















    return 0;
  } catch (error) {
    console.error('Error fetching pixel data:', error);
    throw error;
  }
}

getPixelData();
 



</script>