<h3>Fornecedores</h3>


{{-- @dd($fornecedores) --}}
{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    Fornecedor: { $fornecedores[1]['nome'] }
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
            -Vazio
        @endempty
    @endisset

@endisset
