<div class="toggle-target__modal modal toggle-close-when-out" id="grupoModal">
    <span class='bx bx-x modal-close toggle' data-target="grupoModal"></span>
    <form action="{{route('criargrupo')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome-field">Nome do grupo</label>
            <input class="form-field" id="nome-field" type="text" name="nome">
            @error('nome')
            <p class="">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="interesse_field">Áreas de estudo do grupo </label>
            <input class="form-field" id="interesse_field" name="areas_estudo">
            <span class="field-helper">Separe as áreas por vírgula</span>
            @error('interesse')
                <span class="form-group__error">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="descricao">Crie uma descrição marcante para seu grupo</label>
            <textarea name="descricao" class="form-field" id="descricao"></textarea>
            @error('descricao')
                <span class="form-group__error">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn--primary"> Enviar </button>
    </form>
</div>
