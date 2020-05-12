mybutton = document.querySelector('.scroll-to-top');
mymenu = document.querySelector('.main-page__header');
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
    mymenu.style.background = 'rgba(106, 106, 106, .85)';
  } else {
    mybutton.style.display = "none";
    mymenu.style.background = 'unset';
  }
}

function topFunction() {
  window.scrollTo( { top: 0, behavior: 'smooth' } );        
}         




/* form validate */


// Add the novalidate attribute when the JS loads
var form = document.querySelector('.contact-form');
form.setAttribute('novalidate', true);


// Validate the field
var hasError = function (field) {

    // Don't validate submits, buttons, file and reset inputs, and disabled fields
    if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

    // Get validity
    var validity = field.validity;

    // If valid, return null
    if (validity.valid) return;

    // If field is required and empty
    if (validity.valueMissing) return 'Please fill out this field.';

    // If not the right type
    if (validity.typeMismatch) {

        // Email
        if (field.type === 'email') return 'Please enter an email address.';


    }

    // If too short
    if (validity.tooShort) return 'Please lengthen this text to ' + field.getAttribute('minLength') + ' characters or more. You are currently using ' + field.value.length + ' characters.';

  
      // If pattern doesn't match
    if (validity.patternMismatch) {

        // If pattern info is included, return custom error
        if (field.hasAttribute('title')) return field.getAttribute('title');

        // Otherwise, generic error
        return 'Please match the requested format.';

    }

    // If all else fails, return a generic catchall error
    return 'The value you entered for this field is invalid.';

};


// Show an error message
var showError = function (field, error) {

    // Add error class to field
    field.classList.add('error-field');
    // Get field id or name
    var id = field.id || field.name;
    if (!id) return;

// Check if error message field already exists
// If not, create one
var message = field.form.querySelector('.error-message#error-for-' + id );
if (!message) {
    message = document.createElement('div');
    message.className = 'error-message';
    message.id = 'error-for-' + id;
    
    // If the field is a radio button or checkbox, insert error after the label
    var label;

    // Otherwise, insert it after the field
    if (!label) {
        field.parentNode.insertBefore( message, field.nextSibling );
    }

}

// Add ARIA role to the field
field.setAttribute('aria-describedby', 'error-for-' + id);




    // Update error message
    message.innerHTML = error;

    // Show error message
    message.style.display = 'block';
    message.style.visibility = 'visible';

};


// Remove the error message
var removeError = function (field) {

    // Remove error class to field
    field.classList.remove('error-field');
    
   // Get field id or name
   var id = field.id || field.name;
   if (!id) return;
   

   // Check if an error message is in the DOM
   var message = field.form.querySelector('.error-message#error-for-' + id + '');
   if (!message) return;

    // If so, hide it
    message.innerHTML = '';
    message.style.display = 'none';
    message.style.visibility = 'hidden';
    
};

var loaderShow = function(element, message='') {
    var loader = document.createElement('div');
    loader.className = 'loader';
    if (message != '') {
      loader.innerHTML = '<div class="loader__message">'+message+'</div>';
    } else {
      loader.innerHTML = '<div class="loader__spinner"></div>';    
    }
    element.parentNode.insertBefore( loader, element.nextSibling );
    setTimeout(() => {
      loader.style.visibility= 'visible';
      loader.style.opacity = 1;
    }, 100);
    return loader;
}

// Listen to all blur events
form.addEventListener('blur', function (event) {
    // Validate the field
    var error = hasError(event.target);
  
    // If there's an error, show it
    if (error) {
        showError(event.target, error);
        return;
    } 
    // Otherwise, remove any existing error message
    removeError(event.target);

}, true);

var ajaxSendMessage = function(messageFields, elementLoader){
    var xhr = new XMLHttpRequest()
    xhr.open('POST', 'https://jsonplaceholder.typicode.com/todos/1');
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.send(messageFields);
    xhr.onload = function() {
        var messageLoader = loaderShow(elementLoader, 'message send');
        setTimeout(() => {
            console.log(elementLoader);
            elementLoader.remove();
            messageLoader.style.visibility = 'hidden';
            messageLoader.style.opacity = 0;
            messageLoader.remove();
        }, 1500);
    }    
    return {send: "true", message:'message send', error: 'false'};
}
// Check all fields on submit
form.addEventListener('submit', function (event) {
    // Get all of the form elements
    var fields = event.target.elements;
    // Validate each field
    // Store the first field with an error to a variable so we can bring it into focus later
    var error, hasErrors;
    for (var i = 0; i < fields.length; i++) {
        error = hasError(fields[i]);
        if (error) {
            showError(fields[i], error);
            if (!hasErrors) {
                hasErrors = fields[i];
            }
        }
    }

    // If there are errrors, don't submit form and focus on first element with error
    if (hasErrors) {
        event.preventDefault();
        hasErrors.focus();
    } else {

    // Otherwise, let the form submit normally
    // You could also bolt in an Ajax form submit process here
    var msgContactForm = {};
    msgContactForm.name = event.target.querySelector('#name').value;
    msgContactForm.email = event.target.querySelector('#email').value;
    msgContactForm.subject = event.target.querySelector('#subject').value;
    msgContactForm.message = event.target.querySelector('#message').value;
    //console.log(JSON.stringify(msgContactForm));
    var loader = loaderShow(form);
    
    var result = ajaxSendMessage(JSON.stringify(msgContactForm), loader);


/*    if (result) {
        form.reset();
        loader.remove();
        loader = loaderShow(form, result.message);
        setTimeout(() => {
            loader.remove();
        }, 3000);        
    }*/
    event.preventDefault();    
    }
}, true);



/* END: form validate */
