<h1>Grupo</h1>

<form action="{{url("/grupo/$grupo->id/editar")}}" method="post">
    @csrf
    Nome: <input type="text" value="{{$grupo->nome}}" name="nome"> <br>
    Descrição: <input name="descricao" type="text" value="{{$grupo->descricao}}"> <br>

    <input type="submit"><br>

    <br>
</form>


<form action="{{url("/grupo/$grupo->id/apagar")}}" method="POST">
    @csrf
    <button type="submit">EXCLUIR</button>
</form>
