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
@section('title', 'Science Ar - Criar Quiz')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <!-- Formulário para criar um novo quiz -->
    <form action="{{ route('store_quiz') }}" method="post">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <label for="img">URL da imagem:</label>
        <input type="text" name="img" id="img" required>
        <br>
        <button type="submit">Criar Quiz</button>
    </form>
@endsection

{{-- Footer --}}
@include('layouts/footer')

