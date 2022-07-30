<h3>Fornecedor</h3>

{{-- Essa é a view de fornecedores --}}
{{'Texto de teste'}}
<?= 'Texto de teste'?>


@isset($fornecedores)
   @forelse ($fornecedores as $fornecedor)  
    <p>{{$loop->iteration}}  </p>
    <p>Fornecedor: {{ $fornecedor['nome']}}</p>
    <p>Status: {{ $fornecedor['status']}}</p>
    <p>CNPJ: {{ $fornecedor['cnpj'] ?? 'Não possui CNPJ'}}</p>
    <p>Telefone: ({{ $fornecedor['ddd'] ?? 'Não possui CNPJ'}}) {{$fornecedor['telefone']}}</p>
    @if ($loop->first)
        <br>Primeira iteração do loop
    @endif
    @if ($loop->last)
        <br>Última iteração do loop
    @endif
    <hr>
   @empty
    <p>Não existem itens no array!</p>
   @endforelse
   
   
@endisset
