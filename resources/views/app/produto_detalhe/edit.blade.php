@extends('app.layouts.basico')
@section('titulo', 'Detalhes do Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar Detalhes do Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <h4>Produto</h4>
            <div>Nome: {{ $produtoDetalhe->produto->nome }}</div>
            <br>
            <div>Descrição: {{ $produtoDetalhe->produto->descricao }}</div>
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                @component('app.produto_detalhe._components.form_create_edit', ['produtoDetalhe' => $produtoDetalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
