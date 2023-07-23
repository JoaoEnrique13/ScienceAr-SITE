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
@section('title', 'Science Ar - Temperatura')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <div class="container-main">
        <main>
            <p class="tituloCentralizado">Temperatura</p>

            {{-- O que é --}}
            <div class="row">
                <div class="col">
                    <div class="subtitulo_temp">
                        <p>O que é?</p>
                    </div>

                    <div class="texto-temp">
                        <p>É uma grandeza física que designa a quantidade de energia cinética (movimento ou agitação) das moléculas e o estado térmico de um corpo (quente ou frio).
                            Quanto mais quente se apresenta o corpo, maior será sua energia cinética, ou seja, a agitação molecular. Já quanto mais frio, menor será a agitação molecular.
                            Dessa forma, o equilíbrio térmico ocorre quando os dois corpos, por meio da transferência de calor, atingem a mesma temperatura.
                        </p>
                        <br>
                        <p>Atualmente existem três escalas termométricas utilizadas: celsius, fahrenheit e kelvin. A escala celsius é a mais usada 
                            de todas, praticamente por todos os países do mundo. A escala fahrenheit é utilizada nos Estados Unidos da América e em outros pequenos
                            países. Já a escala kelvin é vista no meio acadêmico, sendo a unidade de medida de temperatura adotada pelo Sistema Internacional de Unidades.</p>        
                        <br>
                        <p>A medida de temperatura de um corpo determina o sentido no qual o calor irá fluir. Essa forma de energia térmica deve sempre partir 
                        dos corpos de maior temperatura em direção aos corpos de menor temperatura, até que se estabeleça a condição de equilíbrio térmico.</p>
                    </div>
                </div>

                {{-- Imagem --}}
                <div class="col">
                    <div class="img-temp">
                        <img src="../img/materiais/temperatura/thermometer.jpg" class="w-100" alt="Termometro">
                    </div>
                </div>
            </div>

            
            <div class="subtitulo_temp">
                <p>Escalas</p>
            </div>

            <div class="subtitulo-escalas">
                <p>Celsius</p>
            </div>
            <div class="texto-temp texto-escalas">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper ac velit tristique ultrices. Aliquam erat volutpat. 
                Donec ante ipsum, rutrum rhoncus sollicitudin vitae, blandit et nulla. Maecenas eu arcu lacus. Praesent suscipit tempus ipsum at 
                tincidunt. Aenean nisi leo, gravida eget nisi volutpat, mollis congue nibh. Sed interdum metus ac nunc blandit euismod. Curabitur
                libero tortor, ullamcorper id nulla nec, consequat tempus sapien. Quisque pellentesque mattis sapien vitae pellentesque. Phasellus 
                mollis vel leo eu mollis.</p>
            </div>
        
            <div class="subtitulo-escalas">
                <p>Fahrenheit</p>
            </div>
            <div class="texto-temp texto-escalas">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper ac velit tristique ultrices. Aliquam erat volutpat.
                Donec ante ipsum, rutrum rhoncus sollicitudin vitae, blandit et nulla. Maecenas eu arcu lacus. Praesent suscipit tempus ipsum at
                tincidunt. Aenean nisi leo, gravida eget nisi volutpat, mollis congue nibh. Sed interdum metus ac nunc blandit euismod. Curabitur 
                libero tortor, ullamcorper id nulla nec, consequat tempus sapien. Quisque pellentesque mattis sapien vitae pellentesque. Phasellus 
                mollis vel leo eu mollis.</p>
            </div>

            <div class="subtitulo-escalas">
                <p>Kelvin</p>
            </div>
            <div class="texto-temp texto-escalas">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper ac velit tristique ultrices. Aliquam erat volutpat. 
                Donec ante ipsum, rutrum rhoncus sollicitudin vitae, blandit et nulla. Maecenas eu arcu lacus. Praesent suscipit tempus ipsum at
                tincidunt. Aenean nisi leo, gravida eget nisi volutpat, mollis congue nibh. Sed interdum metus ac nunc blandit euismod. Curabitur 
                libero tortor, ullamcorper id nulla nec, consequat tempus sapien. Quisque pellentesque mattis sapien vitae pellentesque. Phasellu
                mollis vel leo eu mollis.</p>
            </div>

            <div class="subtitulo_temp">
                <p>Conversão de temperatura</p>
            </div>

            <div class="row">
                <div class="col">
                    <div class="tabela">
                        <div class="txt-tabela">
                            <p>Para transformar celsius em fahrenheit, usa-se a fórmula: <br>

                                <img src="../img/materiais/temperatura/formula1.PNG" alt="">   
                            </p>
                            
                            <p class="txt-tabela">
                                Tc - temperatura em celsius (ºC)
                                <br>
                                Tf - temperatura em fahrenheit (ºF)
                            </p>
                        </div>

                        <div class="txt-tabela">
                            <p>Para converter celsius em kelvin ou vice-versa, é usada a fórmula abaixo:                    
                                <br>
                                <img src="../img/materiais/temperatura/formula2.PNG" alt="">   
                            </p>
                            
                            <p class="txt-tabela">
                                Tk - temperatura em kelvin (ºK)
                            </p>
                        </div>

                        <div class="txt-tabela">
                            <p>Para conversão entre kelvin e fahrenheit, é usada a fórmula abaixo: 
                                <br>
                                <img src="../img/materiais/temperatura/formula3.PNG" alt="">   
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subtitulo_temp">
                <p>Para aprender de uma maneira mais divertida!</p> 
            </div>

            <div class="qr-code" style="align-items: center; justify-content: center;">
                <img src="../img/materiais/temperatura/image 4.png" alt="">
            </div>

            <div class="txt-tabela">
                <p>Abra o aplicativo e escaneie o QR Code.</p><br>
                <p>Tenha um bom estudo!</p>
            </div>
        </main>
    </div>
@endsection

{{-- Footer --}}
@include('layouts/footer')

