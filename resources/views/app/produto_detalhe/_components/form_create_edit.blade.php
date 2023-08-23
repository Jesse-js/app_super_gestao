@if (isset($produto_detalhe->id))
    <form action="{{ route('produto-detalhe.update', ['produto' => $produto_detalhe->id]) }}" method="post">
        @method('PUT')
@else
    <form action="{{ route('produto-detalhe.store') }}" method="post">
@endif
    @csrf
    <input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" placeholder="ID do Produto" class="borda-preta">
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    <input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" placeholder="Comprimento"
        class="borda-preta">
    {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
    <input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" placeholder="Largura" class="borda-preta">
    {{ $errors->has('largura') ? $errors->first('largura') : '' }}
    <input type="text" name="altura" value="{{ $produto_detalhe->largura ?? old('altura') }}" placeholder="Altura" class="borda-preta">
    {{ $errors->has('altura') ? $errors->first('altura') : '' }}
    <select name="unidade_id" id="">
        <option value="">Selecione a unidade de Medida</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}"
                {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
                {{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

    @if (isset($produto_detalhe->id))
        <button type="submit" class="borda-preta">Alterar</button>
    @else
        <button type="submit" class="borda-preta">Cadastrar</button>
    @endif
</form>
