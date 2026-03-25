
let submitBtn = document.getElementById('submit_btn');
let commentForm = document.getElementById('comment_form');
let errorSummaryTop = document.getElementById('error_summary_top');

let nameInput = document.getElementById('name');
let categoryInput = document.getElementById('category');
let experienceInput = document.getElementsByName('experience');
let languagesInput = document.getElementsByName('languages[]');

let nameError = document.getElementById('name_error');
let categoryError = document.getElementById('category_error');
let experienceError = document.getElementById('experience_error');
let languagesError = document.getElementById('languages_error');

let errors = {}

submitBtn.addEventListener("click", onSubmitForm)

function addError(fieldName, message) {
    errors[fieldName] = message
}

function showFieldErrors() {
    nameError.innerHTML = errors.name || ''
}
function onSubmitForm(evt) {
    evt.preventDefault()

    errors = {}
    nameError.innerHTML = ''
    const name = nameInput.value.trim()
    const nameRE = /^[A-Za-z ]+$/;
    if (name === '') {
        addError('name', "name is required")        
        
    }
    else if (!nameRE.test(name)) {
        addError('name', "Name can only contain letters and spaces")
    }

    if (Object.keys(errors).length === 0) {
        commentForm.submit()
    }
    else {
        showFieldErrors()
    }
}