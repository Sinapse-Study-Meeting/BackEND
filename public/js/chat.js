(async () => {
    let url = '/chat/conversas';

    let token = document.querySelector("[name='_token']").value;


    await fetch(url).then(response => response.json()).
    then(data =>{
        data = JSON.parse(data)
        for (let conversa of data){
            console.log(conversa)
        }
    })

})()
