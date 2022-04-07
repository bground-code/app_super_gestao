<h6>olá mundo fornecedores</h6>
{{--Comentario para adicionar no blade, não será interpretado pelo blade --}}
{{ 'texto teste blade sytnax'}}
@php
/*
   if(){

   }elseif(){

   }
*/


@endphp


@if (count($fornecedores) > 0 && count ($fornecedores) < 10 )
    <h3> existe algo no array </h3>
@elseif(count($fornecedores) > 10)
     <h3> Existem mais de 10 fornecedores </h3>
@else 
 <h3> não tem nada cadastrado</h3>
    
@endif