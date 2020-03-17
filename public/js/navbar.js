let $ = document.querySelector.bind(document);


let menu = $('.navbar__menu');
$('.navbar__trigger').addEventListener('click', (e) => {
    if(!menu.classList.contains('open')){
        menu.classList.add('open');
    }
    else {
        menu.classList.remove('open');
    }
});


window.addEventListener('resize', (e) => {
    if(window.innerWidth > 740)
    menu.classList.remove('open');
});