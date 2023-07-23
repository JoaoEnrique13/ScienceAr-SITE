<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuizAnswered;
use App\Models\QuestionAnswered;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //LISTA QUIZ
    public function listQuiz(){
        $quizzes = Quiz::all();
        return view("quiz.index", ['quizzes' => $quizzes]);
    }

    public function create(Request $request){
        // $livro =  $request->answer[];
    }

    //FORMULARIO PARA RESPONDER
    public function quiz($id){
        $quiz = Quiz::all()->where('idQuiz', $id)->first();//Quiz escolhido
        $questions = Question::where('idQuiz', $id)->paginate(1);//Questões do quiz escolhido
        $total_questions = Question::all()->where('idQuiz', $id)->count();//Questões do quiz escolhido
        $answers = Answer::all();//todas as respostas
        //redireciona para quiz escolhido
        
        //Caso o quiz selecionado não exista
        if(!$quiz){
            return view("errors.404");
        }

        //caso o quiz selecionado exista, redireciona para ele
        return view("quiz.quiz", ['quiz' => $quiz, 'questions' => $questions, 'answers' => $answers, 'total_questions' => $total_questions]);
    }

    //ENVIA RESPOSTA DO QUIZ
    public function submit(Request $request){
        $idStudent = 1;
        $total_questions = Question::all()->where('idQuiz',  $request->id_quiz)->count();//Questões do quiz escolhido
        $answers_correct = []; //respostas certas do banco
        $answers_correct_user = 0; //respostas certas do usuario
        $questions = Question::all()->where('idQuiz',  $request->id_quiz);//Questões do quiz escolhido
        

        $validated = $request->validate([
            'resposta' => 'required',
        ]);

        //pega apenas as respostas certas do quiz selecionado
        foreach ($questions as $question) {
            // echo "$question->idQuestion <br>";

            $answers = Answer::where('idQuestion', $question->idQuestion)
                ->where('correct', 1)
                ->get();
            
            foreach ($answers as $answer) {
                $answers_correct[] = $answer->idAnswer;
            }
        }

        // Recupera as respostas da sessão
        $respostas = $request->session()->get('respostas', []);
        
        // Adiciona a resposta atual ao array de respostas
        $respostas[$request->input('page')] = $request->input('resposta');
        
        // Armazena as respostas atualizadas na sessão
        $request->session()->put('respostas', $respostas);
        
        //Avançar questão
        if ($request->input('action') === 'next') {
            $next_page = $request->input('page') + 1; //avanca contador
            return redirect("/quiz/$request->id_quiz?page=$next_page"); //redireciona para proxima pagina
        }

        //Voltar questão
        if ($request->input('action') === 'prev') {
            $prev_page = $request->input('page') - 1; //subtrau contador
            return redirect("/quiz/$request->id_quiz?page=$prev_page"); //redireciona para pagina anterior
        }

        //Ultima pergunta
        if ($request->input('action') === 'submit') {

            //Verifica se já respondeu o quiz
            $quiz_answered = QuizAnswered::where('idStudents', $idStudent)
                ->where('idQuiz',  $request->id_quiz)
                ->first();

            //Caso já tenha respondido o quiz
            if($quiz_answered){

                //Atualiza o Quiz
                $quiz_answered->idQuiz = $request->id_quiz;
                $quiz_answered->idStudents = $idStudent;
                $quiz_answered->save();

                //PERGUNTAS
                //Percorre todas as respostas
                
                //Pega as questões respondidas do quiz
                $questions_answered = QuestionAnswered::where('idQuizAnswered', $quiz_answered->idQuizAnswered)->get();

                $cont_answers = 1;//contador das respostas

                //Percorre todas as questões
                foreach ($questions_answered as $question_answered) {

                    //Atualiza Resposta
                    DB::table('questions_answered')
                        ->where('idQuizAnswered', '=', $quiz_answered->idQuizAnswered)
                        ->where('idQuestionAnswered', $question_answered->idQuestionAnswered)
                        ->update([
                            'idQuizAnswered' => $quiz_answered->idQuizAnswered,
                            'idAnswer' => $respostas[$cont_answers],
                        ]);

                        $cont_answers++;//contador das resposts
                }
            }
            
            //Caso não tenha respondido o quiz
            else{
                //Cria o Quiz Respondido
                $quiz_answered = QuizAnswered::create([
                    'idQuiz' => $request->id_quiz,
                    'idStudents' => $idStudent,
                ]);
                
            //PERGUNTAS
            //Percorre todas as respostas
            foreach ($respostas as $resposta){

                //Cria resposta da pergunta
                QuestionAnswered::create([
                    'idQuizAnswered' => $quiz_answered->id,
                    'idAnswer' => $resposta
                ]);
            }
        }
            
            $i = 1;//contador das respostas

            //verifica quantidade de acertos (foreach por todas as respostas certas)
            foreach($answers_correct as $answer_correct){

                //caso resposta certa tenha o mesmo id que a resposta escolhida
                if($answer_correct == $respostas[$i]){
                    $answers_correct_user += 1;//aumenta quantidade de acertos
                }
                $i++;
            }

            //Redireciona para pagina de resultado
            return view('quiz.result_quiz', [
                'answers_correct_user' => $answers_correct_user,
                'total_questions' => $total_questions,
                'id_quiz' => $request->id_quiz,
            ]);
        }
    }

    //PEGA QUESTÕES DO QUIZ
    public function getQuestions($idQuiz){
        $questions = Question::where('idQuiz', $idQuiz)->get();

        return $questions;
    }

    // MOSTRA RESULTADO DO QUIZ AO RESPONDER
    public function resultQuiz(){
        return view('quiz.result_quiz');
    }

    //MOSTRA TODOS OS QUIZZES RESPONDIDOS
    public function quizAnswered(){
        $quizzes_answered = QuizAnswered::all();
        $quizzes = Quiz::all();

        return view('quiz.quiz_answered', ['quizzes_answered' => $quizzes_answered, 'quizzes' => $quizzes]);
    }

    public function progress(){
        return view('quiz.progress');
    }










    public function createQuiz()
    {
        return view('create_quiz');
    }

    public function storeQuiz(Request $request)
    {
        // $request = $request->only(['title', 'description', 'img']);
        $quiz = Quiz::create([
            'idAdmin' => 1,
            'title' => $request->title,
            'description' => $request->description,
            'img' => $request->img,
        ]);

        // echo $quiz->id;
        $route = '/quiz/' . $quiz->id . '/add-question';
        // echo $route;
        return redirect($route);

        // return redirect()->route('add_question', ['quiz_id' => $quiz->idQuiz]);

        // // $quiz = Quiz::create([
        // //     'idAdmin' => 1,
        // //     'title' => $request->title,
        // //     'description' => $request->description,
        // //     'img' => $request->img,
        // // ]);
    
    }

    public function addQuestion($quiz_id)
    {
        $quiz = Quiz::where('idQuiz', $quiz_id)->get()->first();
        return view('admin.add_question', compact('quiz'));
    }

    public function storeQuestion(Request $request, $quiz_id)
    {
        $question = Question::create([
            'idQuiz' => $quiz_id,
            'questionText' => $request->input('questionText'),
        ]);

        // foreach ($request->input('answers') as $answerData) {
        //     // $answer = new Answer($answerData);
        //     // $question->answers()->save($answer);
            
        //     print_r ($answerData);

        //     echo $answerData->correct;

        //     // $answer = Answer::create([
        //     //     'idQuestion' => $question->id,
        //     //     'answerText' => $answerData->answerText,
        //     //     'correct' => $answerData->correct,
        //     // ]);
        // }

        foreach ($request->input('answers') as $answerData) {
            $answer = new Answer([
                'answerText' => $answerData['answerText'],
                'correct' => isset($answerData['correct']),
            ]);
    
            $question->answers()->save($answer);
        }

        // return redirect()->route('add_question', ['quiz_id' => $quiz_id]);
    }

}