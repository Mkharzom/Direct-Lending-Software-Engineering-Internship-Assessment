function getState() {
    // Get the postcode entered by the user
    var postcode = document.getElementById("postcode").value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/get_state.php?postcode="+ postcode, true);
    xhr.onload = function (e) {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                try{
                    var data = JSON.parse(xhr.responseText);
                    if(data.status === "success"){
                        document.getElementById("state").value = data.state;
                    }
                }
                catch(err){
                    document.getElementById("state").value = "Postcode not found";
                    alert('check your Postcode');
                }
            } 
        }
        
    };
    
    xhr.onerror = function (e) {
        console.error(xhr.statusText);
    };
    xhr.send(null);
}

  // JavaScript function to handle form submission
function submitForm() {
    // Get form data
    document.getElementById("state").removeAttribute("disabled");
    var formData = {
        'name': $('input[name=name]').val(),
        'dob': $('input[name=dob]').val(),
        'address': $('input[name=address]').val(),
        'postcode': $('input[name=postcode]').val(),
        'state': $('input[name=state]').val()
    };

    // Make an AJAX call to the "Submit/Save" endpoint
    $.ajax({
        type: 'POST',
        url: 'php/submit.php',
        data: formData,
        dataType: 'json',
        encode: true
    })
    .done(function(data) {
        // Handle successful submission
        console.log(data);
        alert("Data submitted successfully");
    })
    .fail(function(data) {
        // Handle error
        console.log('Error:', data);
        alert("Error submitting data");
    });
}
