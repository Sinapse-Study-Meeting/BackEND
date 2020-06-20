moment.locale('pt-br');
(async () => {
    let url = '/chat/conversas';

    let token = document.querySelector("[name='_token']").value;


    await fetch(url).then(response => response.json()).
    then(data =>{
        data = JSON.parse(data)
        for (let conversa of data){
            console.log(conversa)
            criarConversa(conversa)
        }
    })


})()

function criarConversa(conversa) {
  let HTML = `<div class="chat_list"> <div class="chat_people">  <div class="chat_img">
  <img src=""> </div>  <div class="chat_ib"> <h5>`+conversa.users[0].name+`
  <span class="chat_date">`+new Date(conversa.mensagens.created_at).toLocaleDateString('pt-BR',{month: 'short', day: '2-digit'})+`</span>
  </h5> <p>`+conversa.mensagens.mensagem+`</p> </div> </div> </div>`

    document.querySelector('.inbox_chat').innerHTML+=HTML;
}

function dataFormatada(d) {
    var nomeMeses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dec']
    var data = new Date(d);
    var dia = data.getDate();
    var mes = data.getMonth();
    mes = nomeMeses[mes];

    return [dia, mes].join(' ');
}
