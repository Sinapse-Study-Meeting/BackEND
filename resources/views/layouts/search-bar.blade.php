<section class="search-bar">
    <div class="container">
    <a role="button" class="search-bar__trigger">
            <i class='bx bx-search search-bar-icon'></i>
        </a>
        <form action="{{route('search')}}" method="GET" class="search-bar__form">
            <label for="search-input" class="search-bar__label">Busque por usuários ou grupos</label>
            <input id="search-input" type="search" placeholder="Digite aqui sua busca" name="field">
            <button type="submit">buscar</button>
        </form>
    </div>
</section>