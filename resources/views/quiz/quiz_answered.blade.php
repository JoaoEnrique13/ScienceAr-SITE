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
@section('title', 'Science Ar - Meus Quizzes Respondidos')

{{-- Menu --}}
@include('layouts/menu')

{{-- Conteudo do site --}}
@section('content')
    <h1>Quiz Respondido</h1>
    {{-- Caso não tenha respondido nenhum Quiz --}}
    @if (count($quizzes_answered) <=0)
        <h3>Você não respondeu nenhum Quiz</h3>
        <p><a href="">Clique aqui para ver os quizzes</a></p>
    @endif

    {{-- Lista Quizzes repondidos --}}
    <main style="display: flex">
        {{-- Lista todos os quizzes (card) --}}
        @foreach ($quizzes_answered as $quiz_answered)

            @foreach ($quizzes as $quiz)
                @if ($quiz_answered->idQuiz == $quiz->idQuiz)
                    <div style="border: 1px solid black; height: 200px; width: 200px; margin: 10px;">
                        <p class="title-card-quiz">{{$quiz->title}}</p>{{-- Titulo do Quiz --}}
                        <p class="description-card-quiz">{{$quiz->description}}</p>{{-- Descricao do Quiz --}}
                        <p><a href="/remake-quiz/{{$quiz->idQuiz}}/{{$quiz_answered->idQuizAnswered}}">Refazer Quiz</a></p>{{-- link do Quiz --}}
                    </div>
                @endif
            @endforeach
        @endforeach

    </main>
@endsection
   
{{-- Footer --}}
@include('layouts/footer')
@endsection
    
    