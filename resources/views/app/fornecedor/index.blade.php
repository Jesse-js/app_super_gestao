<h3>Fornecedor</h3>

{{-- Comentário blade --}}
@php
    
@endphp


{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif --}}

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }} <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do loop
        @elseif($loop->last)
            Última iteração do loop <br>
            Total de registros: {{ $loop->count }}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
