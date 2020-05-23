document.querySelectorAll('.toggle').forEach(function(item){
    item.addEventListener('click', (e) => {
        e.stopPropagation();
        let target = document.getElementById(item.getAttribute('data-target'));
        let classTarget;
        target.classList.forEach(element => {
            if(element.search('toggle-target') != -1){
                classTarget = element;
                return;
            }
        });
        if(classTarget.search('--active') != -1) {
            target.classList.remove(classTarget);
        }
        else {
            target.classList.add(classTarget + '--active');
        }

    });
});

window.addEventListener('click', function(e) {
    document.querySelectorAll('.toggle-close-when-out').forEach(function(item){
        if(!e.target.closest('.toggle-close-when-out')) {
            let classTarget;
            item.classList.forEach(element => {
                if(element.search('toggle-target') != -1){
                    classTarget = element;
                    return;
                }
            });
            if(classTarget.search('--active') != -1) {
                item.classList.remove(classTarget);
            }
  
        }
    });
});