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
@section('title', 'Science Ar - Minha Conta')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"></div>
        <!-- Background image -->
      
        <div class="container" style="padding-bottom: 100px">
            <div class="cardLogin mx-4 mx-md-5 shadow-5-strong">
                <div class="card-body py-5 px-md-5">
            
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                      <h2 class="fw-bold mb-5">Meu Perfil</h2>
                      <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="profile">
                          <img src="../img/circulo.png" class="imgProfile" alt="">
                          <button type="submit" class="btnRegistrar btn-primary btn-block mb-4">
                            Alterar Imagem
                          </button>
                        </div>
        
        
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example1" class="form1" placeholder="Primeiro Nome" />
                              <label class="form-label" for="form3Example1"></label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example2" class="form1" placeholder="Segundo Nome"/>
                              <label class="form-label" for="form3Example2"></label>
                            </div>
                          </div>
                        </div>
            
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="email" id="form3Example3" class="form" placeholder="E-mail"/>
                          <label class="form-label" for="form3Example3"></label>
                        </div>
            
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input type="password" id="form3Example4" class="form" placeholder="Senha"/>
                          <label class="form-label" for="form3Example4"></label>
                        </div>
            
                        <!-- Submit button -->
                        <button type="submit" class="btnRegistrar btn-primary btn-block mb-4">
                          Atualizar
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </section>
      <!-- Section: Design Block -->
@endsection

{{-- Footer --}}
@include('layouts/footer')

