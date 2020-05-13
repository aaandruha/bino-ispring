window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.querySelector('.scroll-to-top').style.display = "block";
    document.querySelector('.main-page__header').style.background = 'rgba(106, 106, 106, .85)';
  } else {
    document.querySelector('.scroll-to-top').style.display = "none";
    document.querySelector('.main-page__header').style.background = 'unset';
  }
}

function topFunction() {
  window.scrollTo( { top: 0, behavior: 'smooth' } );        
}         

var form = document.querySelector('.contact-form');
form.setAttribute('novalidate', true);
form.addEventListener('blur', function (event) {
    var error = hasError(event.target);
    if (error) {
        showError(event.target, error);
        return;
    } 
    removeError(event.target);
}, true);
form.addEventListener('submit', function (event) {
    var fields = event.target.elements;
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
    if (hasErrors) {
        event.preventDefault();
        hasErrors.focus();
    } else {
    var msgContactForm = {};
    msgContactForm.name = event.target.querySelector('#name').value;
    msgContactForm.email = event.target.querySelector('#email').value;
    msgContactForm.subject = event.target.querySelector('#subject').value;
    msgContactForm.message = event.target.querySelector('#message').value;
    var loader = loaderShow(form);
    var result = ajaxSendMessage(JSON.stringify(msgContactForm), loader);
    event.preventDefault();    
    }
}, true);

function hasError (field) {
    if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;
    var validity = field.validity;
    if (validity.valid) return;
    if (validity.valueMissing) return 'Please fill out this field.';
    if (validity.typeMismatch) {
        if (field.type === 'email') return 'Please enter an email address.';
    }
    if (validity.tooShort) return 'Please lengthen this text to ' + field.getAttribute('minLength') + ' characters or more. You are currently using ' + field.value.length + ' characters.';
    if (validity.patternMismatch) {
        if (field.hasAttribute('title')) return field.getAttribute('title');
        return 'Please match the requested format.';
    }
    return 'The value you entered for this field is invalid.';
};


function showError (field, error) {
    field.classList.add('error-field');
    var id = field.id || field.name;
    if (!id) return;

    var message = field.form.querySelector('.error-message#error-for-' + id );
    if (!message) {
    message = document.createElement('div');
    message.className = 'error-message';
    message.id = 'error-for-' + id;
    
        var label;
        if (!label) {
            field.parentNode.insertBefore( message, field.nextSibling );
        }
    }
    field.setAttribute('aria-describedby', 'error-for-' + id);
    message.innerHTML = error;
    message.style.display = 'block';
    message.style.visibility = 'visible';
};


function removeError (field) {
  field.classList.remove('error-field');
  var id = field.id || field.name;
  if (!id) return;
  var message = field.form.querySelector('.error-message#error-for-' + id + '');
  if (!message) return;
  message.innerHTML = '';
  message.style.display = 'none';
  message.style.visibility = 'hidden';    
};

function loaderShow (element, message='') {
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


function ajaxSendMessage (messageFields, elementLoader){
    var xhr = new XMLHttpRequest()
    xhr.open('POST', 'https://jsonplaceholder.typicode.com/todos/1');
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.send(messageFields);
    xhr.onload = function() {
        var messageLoader = loaderShow(elementLoader, 'message send');
        setTimeout(() => {
            elementLoader.remove();
            messageLoader.style.visibility = 'hidden';
            messageLoader.style.opacity = 0;
            messageLoader.remove();
        }, 1500);
        form.reset();
    }    
    return {send: "true", message:'message send', error: 'false'};
}

