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
@section('title', 'Science Ar - Quizzes')

{{-- Menu --}}
@include('layouts/menu')

{{-- Conteudo do site --}}
@section('content')
    <main>
        <h3 class="titulo">Quiz</h3>
        <section class="container">
            {{-- Percorre todos os quizzes --}}
            @foreach ($quizzes as $quiz)

                {{-- Pega quantidade de perguntas de casa quiz --}}
                @php
                    $quiz_controller = app(App\Http\Controllers\QuizController::class);
                    $total_questions = count($quiz_controller->getQuestions($quiz->idQuiz));
                @endphp

                {{-- Card do quiz --}}
                <a class="link-card-quiz" href="/quiz/{{$quiz->idQuiz}}">
                    <div class="card">
                        <div class="card-image" style="background-image: url('{{$quiz->img}}')"></div>
                        <h2 class="title">{{$quiz->title}}</h2>
                        <p>{{$quiz->description}}</p>
                        <p>{{$total_questions}} Questões</p>
                    </div>
                </a>
            @endforeach
                
        </section>
    </main>
@endsection

{{-- Footer --}}
@include('layouts/footer')

