var estado = document.getElementById('estado');
xhr = new XMLHttpRequest();
xhr.open("GET", "https://servicodados.ibge.gov.br/api/v1/localidades/estados");
xhr.send();
xhr.addEventListener("load", function () {
    estados = JSON.parse(xhr.responseText);
    estados.forEach(function (uf) {
        op = document.createElement('option');
        op.setAttribute('value', uf.sigla);
        op.setAttribute('id', uf.id);
        op.textContent = uf.nome;
        estado.appendChild(op);
    })

});
estado.addEventListener('change', function (e) {
    let cidade = document.getElementById('cidade');
    options = cidade.querySelectorAll('option');
    for (i = 1; i < options.length; i++) {
        options[i].remove();
    }
    if (this.options[this.selectedIndex]) {
        xhr = new XMLHttpRequest();
        xhr.open("GET", "https://servicodados.ibge.gov.br/api/v1/localidades/estados/" + this.options[this.selectedIndex].id + "/municipios");
        xhr.send();
        xhr.addEventListener("load", function () {
            cidades = JSON.parse(xhr.responseText);
            cidades.forEach(function (ci) {
                op = document.createElement('option');
                op.setAttribute('value', ci.nome);
                op.textContent = ci.nome;
                cidade.appendChild(op);
            })
        });
    }
})