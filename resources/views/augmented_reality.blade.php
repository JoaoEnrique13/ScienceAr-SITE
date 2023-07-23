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
@section('title', 'Science Ar - Realidade Aumentada')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <div class="container-main">
        <main>
            <p class="tituloCentralizado">Realidade Aumentada</p>
      
            <div>

                {{-- O que é: --}}
                <div class="titulo-ra row">
                    <p>O que é?</p>
                </div>
                <div class="row">
                    <div class="texto-oque col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat fringilla erat in molestie. Phasellus et purus sed nibh 
                        sodales finibus ac id ex. Praesent ut lectus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
                        turpis egestas. In sit amet sem nisi. Suspendisse tincidunt felis eleifend ipsum maximus, in sodales libero iaculis. Mauris dictum 
                        dictum nibh, quis tincidunt massa lacinia condimentum. Vivamus pellentesque erat vel consectetur congue. Interdum et malesuada fames 
                        ac ante ipsum primis in faucibus. Phasellus a pretium diam. Quisque vestibulum orci ac diam elementum, sed condimentum ex vulputate.
                        Integer dignissim sed mi et tincidunt. Cras ac ligula augue. Sed cursus nisi nisl, at laoreet dui dapibus eget. In felis orci, semper
                        eu turpis eu, semper ultricies justo.</p>
                    </div>

                    {{-- Imagem --}}
                    <div class="img-realidade col">
                        <img src="../img/realidade.jpg" class="img-rafiki">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p id="titulo-raEd">Realidade Aumentada na educação</p>
                    </div>
                </div>

                <div class="row">
                    <div class="texto-raEd col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper ac velit tristique ultrices. Aliquam erat volutpat. 
                            Donec ante ipsum, rutrum rhoncus sollicitudin vitae, blandit et nulla. Maecenas eu arcu lacus. Praesent suscipit tempus ipsum 
                            at tincidunt. Aenean nisi leo, gravida eget nisi volutpat, mollis congue nibh. Sed interdum metus ac nunc blandit euismod. 
                            Curabitur libero tortor, ullamcorper id nulla nec, consequat tempus sapien. Quisque pellentesque mattis sapien vitae pellentesque. 
                            Phasellus mollis vel leo eu mollis.
                            Maecenas in lacus et felis sollicitudin varius ac id elit. Nulla aliquet semper ex, id malesuada diam scelerisque a. Quisque tincidunt 
                            libero in nulla vulputate vestibulum. Nullam vel tincidunt massa, tempor tristique tellus. Donec ac mi efficitur, vestibulum ante nec, 
                            venenatis purus. Nulla et sollicitudin velit, id tempor nulla. Morbi lobortis ac diam nec fringilla. Praesent dapibus mi odio, vel 
                            suscipit orci pretium vitae. Pellentesque placerat, nulla a cursus lacinia, odio sem laoreet arcu, ut feugiat massa lorem vitae elit.
                            Sed in est sed ipsum euismod pellentesque a a leo. Suspendisse pulvinar elit ut tellus elementum, at efficitur sem faucibus. Nunc 
                            rhoncus mollis lacus, at faucibus eros lobortis sit amet. Donec viverra ex ac diam fringilla, eu tempus turpis consectetur. 
                            Donec eget sodales mi, non tincidunt eros. Vivamus eget odio quis tortor congue tincidunt. Maecenas bibendum accumsan aliquet. 
                            Nulla id lacinia lectus, at scelerisque metus.</p>
                            
                            <div>
                                <p class="texto-raEd">Para saber mais, acesse o artigo: link (Nome do artigo)</p>
                                <p class="texto-raEd">Leia o livro: nome do livro (link para a compra)</p>
                            </div>
                            
                    </div>
                </div>

                {{-- Como usar --}}
                <div class="row">
                    <div class="titulo-ra">
                        <p>Como usar?</p>
                    </div>
                </div>

                {{-- 1 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo" >
                            <p class="num">1</p> 
                        </div>
                    </div>
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>In finibus nec ipsum bibendum viverra. Pellentesque eros dui, ullamcorper vitae molestie eget, 
                            consectetur aliquet magna. Vivamus dictum.
                            Sed in est sed ipsum euismod pellentesque a a leo. Suspendisse pulvinar elit ut tellus elementum, at efficitur sem faucibus. Nunc 
                            rhoncus mollis lacus, at faucibus eros lobortis sit amet. Donec viverra ex ac diam fringilla, eu tempus turpis consectetur. 
                            Donec eget sodales mi, non tincidunt eros.</p>
                        </div>
                        
                    </div>
                </div>

                {{-- 2 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">2</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>In finibus nec ipsum bibendum viverra. Pellentesque eros dui, ullamcorper vitae molestie eget, 
                            consectetur aliquet magna. Vivamus dictum.
                            Sed in est sed ipsum euismod pellentesque a a leo. </p>
                        </div>
                    </div>
                </div>

                {{-- 3 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">3</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>In finibus nec ipsum bibendum viverra. Pellentesque eros dui, ullamcorper vitae molestie eget, </p>
                        </div>
                    </div>
                </div>

                {{-- 4 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">4</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>In finibus nec ipsum bibendum viverra. Pellentesque eros dui, ullamcorper vitae molestie eget, 
                                consectetur aliquet magna. Vivamus dictum.
                                Sed in est sed ipsum euismod pellentesque a a leo.</p>
                        </div>
                    </div>
                </div>

                {{-- 5 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">5</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>Sed in est sed ipsum euismod pellentesque a a leo.</p>
                        </div>
                    </div>          
                </div>
            </div>
        </main>
    </div>
@endsection

{{-- Footer --}}
@include('layouts/footer')

