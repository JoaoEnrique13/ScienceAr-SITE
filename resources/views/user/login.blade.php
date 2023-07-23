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
@section('title', 'Science Ar - Login')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
<!--
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
                    
            {{-- MENSAGEM DE CONTA CRIADA --}}
            @if(session()->has('conta-create-success'))
                <div class="alert alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Conta Criada!</strong> Entre com seu email e senha.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE CONTA NÃO CRIADA --}}
            @if(session()->has('conta-create-danger'))
                <div class="alert alert-danger alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Não foi possivel criar conta!</strong> Tente novamente mais tarde.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            
            <h2 class="titulo-login">Fazer login</h2>
            @csrf

            {{-- Email --}}
            <div class="form-group">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Senha --}}
            <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                <div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Manter logado --}}
            <div class="form-group">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Manter logado') }}
                        </label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col mt-2 link-criar-conta">

                    {{-- Botao submit --}}
                    <button type="submit" class="btn btn-login">
                        {{ __('Fazer Login') }}
                    </button>
                    
                </div>
            </div>
        </form>
    </div>

    <a href="/register">Não tem conta? Cadastre-se</a> -->

    <section class="text-center">
        
        <!-- Background image -->
        <div class="p-5 bg-image d-flex" style="justify-content: center">
            {{-- MENSAGEM DE CONTA CRIADA --}}
            @if(session()->has('conta-create-success'))
                <div class="alert alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Conta Criada!</strong> Entre com seu email e senha.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE CONTA NÃO CRIADA --}}
            @if(session()->has('conta-create-danger'))
                <div class="alert alert-danger alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Não foi possivel criar conta!</strong> Tente novamente mais tarde.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <!-- Background image -->
      
        <div class="container">
            
            <div class="cardLogin shadow-5-strong">
                <div class="card-body py-5 px-md-5">
            
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                      <h2 class="fw-bold mb-5">Entrar</h2>
                      <form method="POST"  action="{{ route('login') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          {{-- <input type="email" id="form3Example3" class="form" placeholder="E-mail"/> --}}
                          <input id="email" type="email" class="form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="E-mail" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert" style="text-align: left">
                                    {{$message}}
                              </span>
                          @enderror
                        </div>
            
                        <!-- Password input -->
                        <div class="form-outline mb-4 mt-4">
                          {{-- <input type="password" id="form3Example4" class="form" placeholder="Senha"/> --}}
                          <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="text-align: left">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
            
                        <!-- Submit button -->
                        <button type="submit" class="btnRegistrar btn-primary btn-block mb-4">
                            Entrar
                        </button>
            
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p class="paragrafo">ou entre com:</p>
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>
            
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                          </button>
            
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                          </button>
            
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                          </button>
                        </div>
            
                        <div class="imgLogo">
                          <img src="../img/logoGoogle.png" alt="">
                          <img src="../img/logoGoogle.png" alt="">
                          <img src="../img/logoGoogle.png" alt="">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <a href="/register">Não tem conta? Cadastre-se</a>
      </section>
      <!-- Section: Design Block -->
@endsection

{{-- Footer --}}
@include('layouts/footer')

