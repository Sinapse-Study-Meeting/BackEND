document.querySelectorAll('.clickEditar').forEach(function (button) {
button.addEventListener('click', function (e) {
let grupoId = button.getAttribute('data-id');

let grupo = buscarGrupo(grupoId);

    montarModalEditar(grupo);

    })
})

async function buscarGrupo(id) {
    let URL = '/grupo/'+id;

    let resposta = await fetch(URL);

    let json = await resposta.json();

    return JSON.parse(json);
}

function montarModalEditar(grupo){

    document.querySelector('#editar-nome').value = grupo.name;

    let editarInteresse = document.querySelector('#editar-interesse');

    for (const interesse of grupo.interesse) {
        editarInteresse.value += interesse+',';
    }

    editarInteresse.value = editarInteresse.value.slice(0,-1);

    document.querySelector('#editar-descricao').value = grupo.descricao;

    document.querySelector('#editar-grupo-form').setAttribute('action', `/grupo/${id}/editar`);
}
