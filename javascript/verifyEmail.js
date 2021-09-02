const form_1 = document.querySelector('#form_1'),
        submitBtn = form_1.querySelector('#form_1 #submit_btn'),
        errorText = form_1.querySelector('#error'),
        code = document.querySelector('#code').value;

form_1.onsubmit = el => {
    el.preventDefault()
}

submitBtn.onclick = el => {
    if (code.trim() === 123) {
        location.href = 'users.php'
        loaderCcontainer.style.display = 'grid'
    }else if(code.trim() === ''){
        errorText.innerHTML = `<span>Code must entered</span>`
        errorText.style.display = 'block'
    } 
    else {
        errorText.innerHTML = `<span>Code does'nt Match</span>`
        errorText.style.display = 'block'
    }
}