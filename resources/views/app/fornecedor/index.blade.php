<h3>Fornecedor(view)</h3>

{{-- Comentário --}}

@php
    
   /* if(){

    }elseif(){

    }else{
        
    }*/


@endphp


{{-- o Unless executa se o retorno for false --}}
@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Interação Atual :{{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['CNPJ'] ?? 'Dado não preenchido'}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? 'DDD não informado'}}) {{$fornecedor['telefone'] ?? 'Telefone não informado'}}
         <br>
        @if($loop->first)
            Primeira Interação
        @endif

        @if($loop->last)
            Ultima Interação
            <br>
            Total de Registros {{$loop->count}}
        @endif
         
         <hr>
        @empty
            Nao existe fornecedores cadastrados
    @endforelse
        
@endisset

<br>

