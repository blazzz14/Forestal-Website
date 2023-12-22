//Email validation on Webforms
function validateEmail(inputElement) {
    //Create a variable that checks email format
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    //Set boolean logic to match format; if no match alert user
    if (inputElement.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!"); //create an alert if email entered on submit is not ACSII compliant
        inputElement.focus(); //input text is input element
        return false;
    }
  }