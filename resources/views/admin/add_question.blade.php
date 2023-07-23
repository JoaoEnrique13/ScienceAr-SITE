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
@section('title', 'Science Ar - Adicionar Pergunta {{ $quiz->title }}')

{{-- Menu --}}
@include('layouts/menu')


{{-- Conteudo do site --}}
@section('content')
    <!-- Exibir o título do quiz e formulário para adicionar perguntas -->
    <h1>{{ $quiz->title }}</h1>
    <form action="{{ route('store_question', ['quiz_id' => $quiz->idQuiz]) }}" method="post">
        @csrf
        <label for="questionText">Pergunta:</label>
        <textarea name="questionText" required></textarea>
        <br>
        <label>Respostas:</label>
        <div id="answers">
            <!-- Campo de resposta padrão -->
            <div>
                <input type="text" name="answers[0][answerText]" required>
                <input type="checkbox" name="answers[0][correct]"> Resposta correta
                <button type="button" class="remove-answer">Remover</button>
            </div>
        </div>
        <br>
        <button type="button" id="add-answer">Adicionar Resposta</button>
        <br><br>
        <button type="submit">Adicionar Pergunta</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection

{{-- Footer --}}
@include('layouts/footer')

