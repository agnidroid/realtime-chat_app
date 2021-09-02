const searchBar = document.querySelector('.user_section .search input'),
        searchBtn = document.querySelector('.user_section .search button'),
        usersList = document.querySelector('.user_section .user_list')
        

searchBtn.onclick = el => {
    searchBar.classList.toggle('active')
    searchBtn.classList.toggle('active')
    searchBar.focus();
    searchBar.value = ''
}

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value.trim()
    if (searchTerm.trim() == '') {
        searchBar.classList.remove('active')
    } else {
        searchBar.classList.add('active')
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText
                usersList.innerHTML = data.trim()
            }
        }
    }    
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded")
    xhr.send("searchTerm=" + searchTerm);

    console.log(searchTerm)
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users_logic.php", true)
    xhr.onload = el => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText
                if (!searchBar.classList.contains('active')) {
                    usersList.innerHTML = data.trim()
                    searchBtn.classList.remove('active')
                }
            } 
        }
    }    
    xhr.send();
}, 500);