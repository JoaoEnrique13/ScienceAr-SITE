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
@section('title', 'Science Ar - Sobre Nós')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <div class="container-main">
        <main>
            <p class="tituloCentralizado">Bem Vindo</p>
        
            <div>
              <div class="row">
                {{-- Imagem --}}
                <div class="col">
                  <div class="img-rafiki">
                    <img src="../img/sobre-nos-img/rafiki.png" class="img-rafiki">
                  </div>
                </div>
                
              {{-- Quem somos --}}
                <div class="col">
                  <div class="subtitulo">
                    <p>Quem Somos?</p>
                  </div>
            
                  <div class="texto-quem-somos">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat fringilla erat in molestie. Phasellus et purus sed nibh 
                    sodales finibus ac id ex. Praesent ut lectus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
                    turpis egestas. In sit amet sem nisi. Suspendisse tincidunt felis eleifend ipsum maximus, in sodales libero iaculis. Mauris dictum 
                    dictum nibh, quis tincidunt massa lacinia condimentum. Vivamus pellentesque erat vel consectetur congue. Interdum et malesuada fames 
                    ac ante ipsum primis in faucibus. Phasellus a pretium diam. Quisque vestibulum orci ac diam elementum, sed condimentum ex vulputate.
                    Integer dignissim sed mi et tincidunt. Cras ac ligula augue. Sed cursus nisi nisl, at laoreet dui dapibus eget. In felis orci, semper
                    eu turpis eu, semper ultricies justo.</p>
                  </div>
                </div>
              </div>
        
              <div class="titulo-ferramentas-objetivos">
                <p>Ferramentas</p>
              </div>
        
              <div class="card-group">
                <div class="card alinha" onclick="window.location.href='/quiz'">
                  <div class="fundo-card">
                    <img class="card-img-top" src="../img/sobre-nos-img/cuate.png" alt="">
                  </div>
                  <div class="card-body">
                    <p class="legenda">Quiz interativo</p>
                  </div>
               </div>
        
                <div class="card alinha" onclick="window.location.href='#'">
                  <div class="fundo-card">
                    <img class="card-img-top" src="../img/sobre-nos-img/amico1.png" alt="" style="padding-top: 40px;">
                  </div>
                  <div class="card-body">
                    <p class="legenda">Conteúdos dinâmicos</p>
                  </div>
                </div>
        
                <div class="card alinha" onclick="window.location.href='/augmented-reality'">
                  <div class="fundo-card">
                    <img class="card-img-top" src="../img/sobre-nos-img/amico.png" alt="">
                  </div>
                  <div class="card-body">
                    <p class="legenda">Realidade Aumentada</p>
                  </div>
                </div>
              </div>    
        
              <div class="titulo-ferramentas-objetivos">
                <p>Nosso Objetivo</p>
              </div>
        
              {{-- Nosso Objetivo --}}
              <div class="row">
                <div class="col col-text-objetivo">
                  <div class="texto-objetivos">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a pretium lectus. Vestibulum id lacinia libero, id rutrum nibh. 
                      In eleifend urna at tellus laoreet, a rutrum ligula varius. Maecenas nec dictum magna. Fusce eget odio dapibus, feugiat quam at, 
                      elementum sem. Aliquam nisi est, eleifend sit amet egestas vel, porta sit amet felis. Donec sit amet elit vitae ante tempus posuere.
                      Suspendisse potenti. Phasellus molestie, elit ut ultrices consectetur, dui felis aliquet nisi, sit amet ullamcorper tortor dolor vel
                      sapien. Curabitur nec enim tellus. Aliquam ac mollis lacus. Mauris dictum dictum nibh, quis tincidunt massa lacinia condimentum. Vivamus 
                      pellentesque erat vel consectetur congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus a pretium diam. Quisque vestibulum orci ac diam elementum, sed condimentum ex vulputate.
                    </p>
                  </div>
                </div>

                {{-- Imagem --}}
                <div class="col">
                  <div class="img-cuate1">
                    <img src="img/sobre-nos-img/cuate1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </main>
    </div>
@endsection

{{-- Footer --}}
@include('layouts/footer')

