@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['motivo_contatos' => $motivo_contatos])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent   
            </div>
            {{-- {{ print_r($motivo_contatos); }} --}}
        </div>          
    </div>    
@endsection