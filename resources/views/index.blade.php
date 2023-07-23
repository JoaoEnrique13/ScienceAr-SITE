{{-- 
    "PRA QUE SERVE
    TANTO CÓDIGO
    SE A VIDA
    NÃO É PROGRAMADA
    E AS MELHORES COISAS
    NÃO TEM LÓGICA". 
    Algúem (algum ano)
--}}

@extends('layouts.main')
@section('title', 'Science Ar')

{{-- Conteudo do site --}}
@section('content')
    <div class="fundo-home">
        {{-- Menu --}}
        @include('layouts/menu')
        
        
        <div class="cont-home">
            <div class="titulo-home">
                <p>Explore a magia da ciência por meio da realidade aumentada</p>
    
                <p class="subtitulo-home">
                    A melhor maneira de aprender e se divertir!
                </p>   
    
                <div class="btnSobreNos">
                        <a href="sobre-nos.html" style="color: #f6f6f6;">Sobre Nós</a>
                </div>       
            </div>
    
    
            <div class="img-astronaut">
                <img src="../img/astronaut.gif" alt="">
            </div>
    
        </div>
        </div>

    {{-- Footer --}}
    @include('layouts/footer')
@endsection

