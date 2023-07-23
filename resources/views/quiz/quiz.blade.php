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
@section('title', 'Science Ar - Quiz ' . $quiz->title)

{{-- Menu --}}
@include('layouts/menu')

{{-- Conteudo do site --}}
@section('content')
    <main class="QuizPerguntas">
        {{-- Contagem das perguntas --}}
        @php 
            $pergunta = 1;

            //Caso exista a variavel page, o numero da pergunta recebe esse valor
            if(isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=$total_questions){
                $pergunta = $_GET['page'];
            }
            
            //caso nao exista a variavel, é a primeira pergunta
            else if(!isset($_GET['page'])){
                $pergunta =1;

            //caso nao tiver a pergunta com a variavel page redireciona para a pagina nao encontrada
            }else if(isset($_GET['page'])){
                redirect('page_not_found');
            }

            
            $next = $pergunta +1;
            $prev = $pergunta -1;
        @endphp
            
        <!-- Titulo do Quiz -->
        <h3 class="tituloCentralizado">{{ $quiz->title }}</h3>
        
        <form action="{{ route('quiz.submit') }}" method="POST">
            <section class="conteudoQuizPerguntas">
                @csrf
                <input type="text" name="id_quiz" value="{{$quiz->idQuiz}}" style="display: none">{{-- ID do quiz --}}
                <input type="hidden" name="page" id="page" value="{{ $pergunta }}">{{-- número da pagina/pergunta --}}

                {{-- Perguntas e respostas --}}
                @foreach ($questions as $question)
                    {{-- Pergunta do quiz --}}
                    <p class="Pergunta">{{ $pergunta }}. {{ $question->questionText }}</p><br><br>

                    @php
                        $percentage = $pergunta / $total_questions * 100;
                    @endphp
                    <progress class="progress-input" max="100" value="{{$percentage}}"></progress><br><br><br>

                    {{-- Respostas --}}
                    <div class="Respostas">
                        @foreach ($answers as $answer)
                            {{-- Caso a resposta seja da pergunta --}}
                            @if ($answer->idQuestion == $question->idQuestion)
                                <input class="input-resposta" style="display: none" type="radio" name="resposta" value="{{$answer->idAnswer}}" id="{{$answer->idAnswer}}"  {{ old('resposta') == $answer->idAnswer ? 'checked' : '' }}><label class="AlternativasRespostas" for="{{$answer->idAnswer}}">{{$answer->answerText}}</label><br>
                            @endif
                        @endforeach
                    </div>
                @endforeach

                                    
                {{-- Caso o usuario não selecione uma resposta --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            @if ($error == "Este campo é obrigatório")
                                Escolha uma resposta
                            @endif
                        @endforeach
                    </div>
                @endif

            </section>
            <div class="Proximo">
                {{-- Botões para enviar, voltar e avançar --}}
                {{-- Caso esteja na ultima pergunta --}}
                @if ($total_questions == $pergunta)
                    <button class="btn btnRegistrar" name="action" type="submit" value="submit">Enviar resposta</button>
                @else
                    {{-- Botão para ir para a próxima --}}
                    <button class="btn btnRegistrar" name="action" type="submit" value="next">Próximo</button>
                @endif
            </div>
        </form>
    </main>
@endsection


{{-- Footer --}}
@include('layouts/footer')
        
        