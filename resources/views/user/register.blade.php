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
@section('title', 'Science Ar - Criar Conta')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
<!--
    <div class="container" style="margin-top: 100px">
        <form class="form-register row" method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nome --}}
            <div class="col-md-6 mt-5">
                <label for="name" class="col-md-4 label-register text-md-right">{{ __('Nome') }}</label>

                <div class="col">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Email --}}
            <div class="col-md-6 mt-5">
                <label for="email" class="col-md-4 label-register text-md-right">{{ __('Email') }}</label>

                <div class="col">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Senha --}}
            <div class="col-md-6 mt-5">
                <label for="password" class="col-md-4 label-register text-md-right">{{ __('Senha') }}</label>

                <div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Confirmar Senha --}}
            <div class="col-md-6 mt-5">
                <label for="password-confirm" class="col-md-4 label-register text-md-right">{{ __('Confirmar Senha') }}</label>

                <div class="col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="new-password">
                </div>
            </div>

            {{-- Criar Conta --}}
            <div class="form-group mt-5">
                <div class="col link-criar-conta">
                    <button type="submit" class="btn btn-login">
                        {{ __('Criar Conta') }}
                    </button>
                </div>
            </div>
                
        </form>
    </div>
    <a href="/register">Já tem conta? Faça login</a> -->

    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"></div>
        <!-- Background image -->
      
        <div class="container">
            <div class="cardLogin mx-4 mx-md-5 shadow-5-strong">
                <div class="card-body py-5 px-md-5">
            
                  <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                      <h2 class="fw-bold mb-5">Criar Conta</h2>
                      <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
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
                          Registrar
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
        <a href="/login">Já tem conta? Faça login</a>
      </section>
      <!-- Section: Design Block -->
@endsection

{{-- Footer --}}
@include('layouts/footer')

