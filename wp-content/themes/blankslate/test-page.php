<?php /* Template Name: Test page */ ?>

<?php get_header(); ?>

<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script> -->
<script>
  hbspt.forms.create({
    region: "na1",
    portalId: "44979414",
    formId: "65076e56-04e1-4a10-9c63-525282c68f23"
  });

function formFieldsToHSJSON(form) {
    let fieldArray = [];
    let formData = new FormData(form);
    for (let field of formData) {
        let values = {
            "name": field[0],
            "value": field[1]
        }
        fieldArray.push(values)
    }
    return fieldArray;
}


function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2){
        return parts.pop().split(";").shift();
    }     
};


function buildHSContext() {
    let hsContext = new Object()
    hsContext.hutk = getCookie('hubspotutk');
    hsContext.pageUri = window.location.href;
    hsContext.pageName = document.title;
    return hsContext
}

function prepareHSFormSubmission(form) {
    var submissionData = new Object()
    submissionData.submittedAt = Date.now()
    submissionData.fields = formFieldsToHSJSON(form)
    submissionData.context = buildHSContext()
    return submissionData
}

async function postData(url = '', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            'Content-Type': 'application/json'
             // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(data) // body data type must match "Content-Type" header
        });
    return response.json() // parses JSON response into native JS objects
}


function submitHSForm(hsFormURL, data) {
    postData(hsFormURL, data).then(data => {
        if(data.inlineMessage){
            // Set an inline thank you message
            document.querySelector("#thankyou").innerHTML = data.inlineMessage 
        }  
});
}






window.addEventListener('DOMContentLoaded',function () {

    var form = document.querySelector('#custom-form') //alter for your forms ID or CSS selector

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        var baseSubmitURL = 'https://api.hsforms.com/submissions/v3/integration/submit'
        // Add the HubSpot portalID where the form should submit
        var portalId = '44979414'
        // Add the HubSpot form GUID from your HubSpot portal
        var formGuid = '65076e56-04e1-4a10-9c63-525282c68f23' //replace with the formGUID copied from the form created inside HubSpot Forms
        var submitURL = `${baseSubmitURL}/${portalId}/${formGuid}`
        var formData = prepareHSFormSubmission(form);
        submitHSForm(submitURL, formData)
    });

});


</script>

<form method="POST" id="custom-form">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputMail" class="form-label">Mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputMail">
  </div>
  <div class="mb-3">
    <label for="exampleInputMessage" class="form-label">Message</label>
    <input type="text" name="message" class="form-control" id="exampleInputMessage">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div id="thankyou" class="alert alert-success" role="alert"></div>

<?php get_footer();?>