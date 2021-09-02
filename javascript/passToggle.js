// Init
const form = document.querySelector('#form_1'),
    form_error = document.querySelector('#error'),
    eye = document.querySelector('#eye'),
    pass = document.querySelector('#password')

    
// calling events
eye.addEventListener('click', eyeToggle)
pass.addEventListener('keyup', eyeVisibility)
window.addEventListener('onload', eyeVisibility)

// Functions        
function eyeToggle (el) {
    // Hide/Show
    if (el.target.classList.contains("fa-eye")) {
        el.target.classList.replace("fa-eye", "fa-eye-slash")
    } else {
        el.target.classList.replace("fa-eye-slash", "fa-eye")
    }

    // Changing attribute
    if (pass.type == "password") {
        pass.type = "text"
        eye.classList.add('active')
    } else {
        pass.type = "password"
        eye.classList.remove('active')
    }    
}

function eyeVisibility(el) {
    if (el.target.value === '') {
        eye.style.visibility = "hidden"
        pass.type = "password"
        eye.classList.add('fa-eye')
        eye.classList.remove('fa-eye-slash')
    } else {
        eye.style.visibility = "visible"
    }
}
