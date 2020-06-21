(async () => {
    let url = '/chat/conversas';
    let token = document.querySelector("[name='_token']").value;
    await fetch(url).then(response => response.json()).then(data => {
        data = JSON.parse(data)
        for (let conversa of data) {
            criarConversa(conversa)
        }
        gerarMensagens();
    })

    document.getElementById('enviar-mensagem-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const form = e.target;
        const mensagemInput = e.target.querySelector('input');
        const mensagem = mensagemInput.value;
        if(mensagem == '') return;

        let url = e.target.getAttribute('action');
        let token = document.querySelector("[name='csrf-token']").getAttribute('content');
        let formData = new FormData();
        formData.append(mensagemInput.getAttribute('name'), mensagem);
    
        fetch(url, {
                body: formData,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN' : token
                }
        }).then(response => response.json())
        .then(mensagem => {
            criarMensagem(mensagem);
            mensagemInput.value = '';
        });

    });
})()

function gerarMensagens() {
    let conversas = document.querySelectorAll('.chat_list')
    for (const conversaElement of conversas) {
        conversaElement.addEventListener('click', async function (e) {
            let chatId = conversaElement.getAttribute('data-id')
            let formEnviarMensagem = document.getElementById('enviar-mensagem-form');
            let url = "/chat/" + chatId + "/mensagens";

            formEnviarMensagem.setAttribute('action', '/enviar_mensagem/' + chatId);
            
            limparAtivos(conversas);
            conversaElement.classList.add('active_chat');
            await fetch(url).then(response => response.json()).then(mensagens => {
                mensagens = JSON.parse(mensagens)
                limparMensagens();
                for (let mensagem of mensagens) {
                    criarMensagem(mensagem)
                }

                document.querySelector('.menu-chat__user-name').textContent = conversaElement.querySelector('.chat-user-name').textContent;
            })
        })
    }
}
function limparAtivos(conversas) {
    for (const conversa of conversas) {
        conversa.classList.remove('active_chat');
    }
}
function criarMensagem(mensagem) {
    let user_id = document.getElementById('user_id').value
    let enviada = user_id == mensagem.user_id;
    let HTML = '';
    if(enviada){
        HTML = criarMensagemEnviada(mensagem);
    }
    else{
        HTML = criarMensagemRecebida(mensagem);
    }

    document.querySelector('.msg_history').innerHTML += HTML;

}

function criarConversa(conversa) {
    let HTML = `<div class="chat_list" data-id="` + conversa.id + `"> <div class="chat_people">  <div class="chat_img">
  <img src=""> </div>  <div class="chat_ib"> <h5><strong class="chat-user-name">` + conversa.users[0].name + `</strong>
  <span class="chat_date">` + new Date(conversa.mensagens.created_at).toLocaleDateString('pt-BR', {
        month: 'short',
        day: '2-digit'
    }) + `</span>
  </h5> <p>` + conversa.mensagens.mensagem + `</p> </div> </div> </div>`

    document.querySelector('.inbox_chat').innerHTML += HTML;
}

function limparMensagens() {
    document.querySelector('.msg_history').innerHTML = '';
}

function criarMensagemRecebida(mensagem) {
    let HTML = `
 <div class="incoming_msg">
    <div class="incoming_msg_img"><img src="img/coruja-perfil.svg" alt="sunil">
    </div>
    <div class="received_msg">
        <div class="received_withd_msg">
            <p>${mensagem.mensagem}</p>
            <span class="time_date"> ${
          new Date(mensagem.created_at).toLocaleTimeString('pt-BR', {hour: '2-digit', minute: '2-digit'}) } | ${
          new Date(mensagem.created_at).toLocaleDateString('pt-BR',
              {month: 'short', day: '2-digit'}) }
            </span>
        </div>
    </div>
</div>
    `
    return HTML;
}

function criarMensagemEnviada(mensagem) {
let HTML = `
<div class="outgoing_msg">
    <div class="sent_msg">
        <p>${mensagem.mensagem}</p>
            <span class="time_date"> ${
                new Date(mensagem.created_at).toLocaleTimeString('pt-BR', 
                {hour: '2-digit', minute: '2-digit'}) } | 
                ${ new Date(mensagem.created_at).toLocaleDateString('pt-BR',
                    {month: 'short', day: '2-digit'}) }
            </span>
    </div>
</div>
`
    return HTML;
}
