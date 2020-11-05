<div class="toggle-target__modal modal toggle-close-when-out" id="interesseModal">
    <span class='bx bx-x modal-close toggle' data-target="interesseModal"></span>
    <form class="home-adicionar-interesse" action="{{route('criarinteresse')}}" method="post">
        @csrf
        <div class="home-adicionar-interesse__fields">
            <div class="form-group home-interesse-form-group">
                <label for="interesse-field">No que você tem interesse em estudar?</label>
                <input class="form-field" id="interesse-field" list="interesse" name="interesse">
                @error('interesse')
                <p class="">{{$message}}</p>
                @enderror
                <datalist id="interesse">
                    @foreach ($ListarInteresses as $item)
                    <option>{{$item->assunto}}</option>
                    @endforeach
                </datalist>
            </div>
            <div class="form-group home-interesse-form-group">
                <label for="categoria_field">Área de interesse</label>
                <input class="form-field" id="categoria_field" list="categoria" name="categoria">
                @error('categoria')
                <span class="form-group__error">{{$message}}</span>
                @enderror
                <datalist id="categoria">
                    @foreach ($categorias as $item)
                    <option>{{$item->nome}}</option>
                    @endforeach
                </datalist>
            </div>
            <div class="form-group home-interesse-form-group">
                <label for="nivel">Quanto você conhece a respeito</label>
                <select class="form-field" name="nivel" id="nivel" class="">
                    <option disabled selected></option>
                    <option value="basico">Básico</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                </select>
                @error('nivel')
                <span class="form-group__error">{{$message}}</span>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn--primary"> Adicionar </button>
    </form>
</div>