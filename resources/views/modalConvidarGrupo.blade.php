<div class="toggle-target__modal modal modalconvidar toggle-close-when-out" id="convidarGrupo">
    <span class='bx bx-x modal-close toggle' data-target="convidarGrupo"></span>
    <div class="modalconvidarusuario" >
        <h2 class="h2-size hazul titulomodal">Convide amigos para o grupo</h2>
        <div class="conteudomodal">
            <div class="sugestaogrupo">
            <div class="input-pesquisar-grupos">
                <div class="input-field">
                    <input type="text" placeholder="Procurar amigos para o grupo" id="user-search-input">
                    <div class="icones">
                        <img src="{{asset('img/bx-search-alt.svg')}}">
                     </div>
                </div>
            </div>
            <h3 class="hclaro h3-size">Resultados</h3>
            <div class="sugestao" id="resultado-usuarios">

            </div>
        </div>
        <div class="amigosselecionados">
            <h4 class="hclaro h4-size">Pessoas Convidadas</h4>
            <div class="listaamigos">
                @foreach($grupo->convites as $convite)
                <div class="sugestaoparticipante">
                    <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                <h4 class=" hazul align-self-center"> {{$convite->user->name}} </h4>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <button type="submit" class="btn--primary"> Enviar Convites</button>
    </div>
</div>
<script>
       let resultados = document.getElementById('resultado-usuarios');
       let urlBusca = '{{route('searchUserByName')}}';
       let campoBusca = document.getElementById('user-search-input');
       campoBusca.addEventListener('input', async () => {
           resultados.innerHTML = '';
           let response = await fetch(urlBusca+'?nome='+campoBusca.value);
           if(response.ok)
           {
               let usuarios = await response.json();
               usuarios.forEach((usuario) => {
                  resultados.innerHTML += `
                    <div class="sugestaoparticipante">
                        <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                        <h4 class=" hazul align-self-center"> ${usuario.name} </h4>
                        <form method="POST" action="${"{{url('/grupo/'.$grupo->id)}}"+ "/convidar/"+usuario.id}">
                        @csrf
                        <button type="submit" class="btn--primary">Convidar</button>
                        </form>
                    </div>
                  ` ;
               });
           }

       });
</script>
