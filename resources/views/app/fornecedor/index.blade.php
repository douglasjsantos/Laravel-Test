<h3>Fornecedores</h3>


{{-- @dd($fornecedores) --}}
{{-- @dd($fornecedores) --}}
Fornecedor: {{$fornecedores[0]['nome']}}
<br>
Status: {{$fornecedores[0]['status']}}
<br>

@if ( !($fornecedores[0]['status'] == 'N'))
    <h1>Fornecedor inativo</h1>
@else
    <h1>Fornecedor ativo</h1>
@endif
