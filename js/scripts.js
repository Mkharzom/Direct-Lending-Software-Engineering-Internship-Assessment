function getState() {
    const testd = document.getElementById("postcode").value;
        if(testd == 53100){
            document.getElementById("state").value="Taman Melwati";
        }
        else{
            document.getElementById("state").value="ERROR";
        }
  }