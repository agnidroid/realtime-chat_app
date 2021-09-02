const form_1 = document.querySelector('#form_1'),
        submitBtn = form_1.querySelector('#form_1 #submit_btn'),
        errorText = form_1.querySelector('#error'),
        loaderCcontainer = document.querySelector('.loader-container')

form_1.onsubmit = el => {
    el.preventDefault()
}
submitBtn.onclick = el => {
    // AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signUp_logic.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText
                if (data !== "done") {
                    errorText.style.display = 'block'
                    errorText.textContent = data;
                    console.log(data)
                } else {
                    console.log(data)
                    location.href = "verifyEmail.php"
                    loaderCcontainer.style.display = 'grid'
                }
            }
        }
    }     
    let formData = new FormData(form_1);
    xhr.send(formData);
}