document.querySelectorAll('.clickEditar').forEach(function (button) {
    button.addEventListener('click', function (e) {
        let grupoId = button.getAttribute('data-id');
        buscarGrupo(grupoId).then(grupo => {
            montarModalEditar(grupo);
        });
    })
})

async function buscarGrupo(id) {
    let URL = '/grupo/' + id;

    let resposta = await fetch(URL);

    let json = await resposta.json();

    return json[0];
}

function montarModalEditar(grupo) {

    document.querySelector('#editar-nome').value = grupo.nome;

    let editarInteresse = document.querySelector('#editar-interesse');
    editarInteresse.value = '';
    for (const area of grupo.areas_estudo) {
        editarInteresse.value += area.area + ',';
    }

    editarInteresse.value = editarInteresse.value.slice(0, -1);

    document.querySelector('#editar-descricao').value = grupo.descricao;

    document.querySelector('#editar-grupo-form').setAttribute('action', `/grupo/${grupo.id}/editar`);
}
