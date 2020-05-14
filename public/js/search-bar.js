document.querySelector('.search-bar__trigger').addEventListener('click', (e) => {
    let search_form =document.querySelector('.search-bar__form'); 
    if(search_form.classList.contains('search-bar__form--active')){
        search_form.classList.remove('search-bar__form--active')
    }
    else {
        search_form.classList.add('search-bar__form--active')
    }
});