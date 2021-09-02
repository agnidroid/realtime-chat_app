/*
const form = document.querySelector('.typing-area'),
        sendBtn = form.querySelector('button'),
        inputField = form.querySelector('.input-field'),
        chatBox = document.querySelector('.chat-box')



form.onsubmit = el => {
    el.preventDefault()
}

sendBtn.onclick = () => {
    // AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert_chat.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = ""
                scrollToBottom()
            }
        }
    }    
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = () => {
    chatBox.classList.add('active')
}
chatBox.onmouseleave = () => {
    chatBox.classList.remove('active')
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get_chat.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText
                chatBox.innerHTML = data
                if (!chatBox.classList.contains('active')) {
                    scrollToBottom()
                }
            }
        }
    }    
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}*/

const form = document.querySelector('.typing-area'),
        sendBtn = form.querySelector('button'),
        inputField = form.querySelector('.input-field'),
        chatBox = document.querySelector('.chat-box')
        to_bottom = document.querySelector('.to_bottom')

form.onsubmit = el => {
    el.preventDefault()
}

sendBtn.onclick = () => {
    // AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert_chat.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = ""
                if (chatBox.scrollHeight != chatBox.scrollTop) {
                    to_bottom.style.display = 'grid'
                }                
            }
        }
    }    
    let formData = new FormData(form);
    xhr.send(formData);
}


chatBox.onmouseenter = () => {
    chatBox.classList.add('active')
}
chatBox.onmouseleave = () => {
    chatBox.classList.remove('active')
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get_chat.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText
                chatBox.innerHTML = data
                if (!chatBox.classList.contains('active')) {
                }
            }
        }
    }    
    let formData = new FormData(form);
    xhr.send(formData);
}, 500000000000);



function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
    to_bottom.style.display = 'none'
}