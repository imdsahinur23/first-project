// confirm pass validate
const passwordField = document.querySelector('input[name="password"]');
const confirmPasswordField = document.querySelector('input[name="password_confirmation"]');
const errorMessage = document.querySelector('.error-message');
const lengthMessage = document.querySelector('.length-message');

confirmPasswordField.addEventListener('input', function() {
    if (confirmPasswordField.value !== passwordField.value) {
        errorMessage.style.display = 'inline';
    } else {
        errorMessage.style.display = 'none';
    }
});

// Optional: prevent form submission if passwords do not match
document.querySelector('form').addEventListener('submit', function(event) {
    if (confirmPasswordField.value !== passwordField.value) {
        event.preventDefault();
        errorMessage.style.display = 'inline';
    }
});

//pass length validate



passwordField.addEventListener('input', function() {
    if (passwordField.value.length < 8) {
        lengthMessage.style.display = 'inline';
    } else {
        lengthMessage.style.display = 'none';
    }
});

confirmPasswordField.addEventListener('input', function() {
    if (confirmPasswordField.value !== passwordField.value) {
        errorMessage.style.display = 'inline';
    } else {
        errorMessage.style.display = 'none';
    }
});

// Optional: prevent form submission if validations fail
document.querySelector('form').addEventListener('submit', function(event) {
    if (passwordField.value.length < 8 || confirmPasswordField.value !== passwordField.value) {
        event.preventDefault();
        lengthMessage.style.display = passwordField.value.length < 8 ? 'inline' : 'none';
        errorMessage.style.display = confirmPasswordField.value !== passwordField.value ? 'inline' : 'none';
    }
});