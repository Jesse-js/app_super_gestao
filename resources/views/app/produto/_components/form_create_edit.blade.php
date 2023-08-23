@if (isset($produto->id))
    <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
        @method('PUT')
@else
    <form action="{{ route('produto.store') }}" method="post">
@endif
    @csrf
    <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição"
        class="borda-preta">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso" class="borda-preta">
    {{ $errors->has('peso') ? $errors->first('peso') : '' }}
    <select name="unidade_id" id="">
        <option value="">Selecione a unidade de Medida</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}"
                {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
                {{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

    @if (isset($produto->id))
        <button type="submit" class="borda-preta">Alterar</button>
    @else
        <button type="submit" class="borda-preta">Cadastrar</button>
    @endif
</form>
