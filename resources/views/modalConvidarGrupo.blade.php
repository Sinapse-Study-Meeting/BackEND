<div class="toggle-target__modal modal modalconvidar toggle-close-when-out" id="convidarGrupo">
    <span class='bx bx-x modal-close toggle' data-target="convidarGrupo"></span>
    <form class="modalconvidarusuario" action="" method="post">
        <h2 class="h2-size hazul titulomodal">Convide amigos para o grupo</h2>
        <div class="conteudomodal">
            <div class="sugestaogrupo">
            <div class="input-pesquisar-grupos">
                <div class="input-field">
                    <input type="text" placeholder="Procurar amigos para o grupo">
                    <div class="icones">
                        <img src="{{asset('img/bx-search-alt.svg')}}">
                     </div>
                </div>
            </div>
            <h3 class="hclaro h3-size">Sugestões</h3>
            <div class="sugestao">
                <div class="sugestaoparticipante">
                    <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                    <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                    <input type="checkbox" id="usuariosugestao" name="usuariosugestao" value="true" class="ckeckparticipantes">
                </div>
                <div class="sugestaoparticipante">
                    <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                    <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                    <input type="checkbox" id="usuariosugestao" name="usuariosugestao" value="true" class="ckeckparticipantes">
                </div>
            <div class="sugestaoparticipante">
                <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                <input type="checkbox" id="usuariosugestao" name="usuariosugestao" value="true" class="ckeckparticipantes">
            </div>
            <div class="sugestaoparticipante">
                <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                <input type="checkbox" id="usuariosugestao" name="usuariosugestao" value="true" class="ckeckparticipantes">
            </div>
            <div class="sugestaoparticipante">
                <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                <input type="checkbox" id="usuariosugestao" name="usuariosugestao" value="true" class="ckeckparticipantes">
            </div>
        </div>
        </div>
        <div class="amigosselecionados">
            <h4 class="hclaro h4-size">1 Amigos Selecionados</h4>
            <div class="listaamigos">
                <div class="sugestaoparticipante">
                    <img src="{{ asset('img/estudos.png')}}" class="fotosugestao">
                <h4 class=" hazul align-self-center"> {{$grupoAtivo->nome}} </h4>
                </div>
            </div>
        </div>
    </div>
   
    <button type="submit" class="btn--primary"> Enviar Convites</button>
    </form>
</div>
