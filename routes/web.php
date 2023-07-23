<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quizController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// NAVEGAÇÃO
Route::get('/', [NavigationController::class, 'index']); //Página Home
Route::get('/augmented-reality', [NavigationController::class, 'augmented_reality'])->name('augmented_reality');//realidade aumentada
Route::get('/material/temperature', [NavigationController::class, 'temperature'])->name('temperature');//materiais
Route::get('/about', [NavigationController::class, 'about'])->name('about');//sobre
Route::get('/quiz', [QuizController::class, 'listQuiz']); //Todos os quizzes
Route::get('/page-not-found', [NavigationController::class, 'page_not_found'])->name('page_not_found'); //erro 404


//USUARIO NÃO LOGADO
Route::group(['middleware' => 'guest'], function () {
    // Login
    Route::get('/login', [NavigationController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    // Criar conta
    Route::get('/register', [NavigationController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});

//USUARIO LOGADO
Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');//sair da conta
    Route::get('/account', [NavigationController::class, 'account'])->name('account');//visualizar da conta

    
    // SÓ ADMIN PODE ACESSAR
    Route::middleware('admin')->group(function () {
        //REDIRECIONAMENTO DOS QUIZZES (Admin)
        Route::get('/quiz/create', [NavigationController::class, 'create_quiz'])->name('create_quiz');//view de criar quiz
        Route::post('/quiz/store', [QuizController::class, 'storeQuiz'])->name('store_quiz');//salva quiz
        Route::get('/quiz/{quiz_id}/add-question', [QuizController::class, 'addQuestion'])->name('add_question');//tela pra adicionar questões
        Route::post('/quiz/{quiz_id}/store-question', [QuizController::class, 'storeQuestion'])->name('store_question');//salva questões
    });

    //REDIRECIONAMENTO DOS QUIZZES (User)
    Route::get('/quiz/progress', [QuizController::class, 'progress'])->name('quiz.progress');//Progresso do usuário
    Route::get('/result-quiz', [QuizController::class, 'resultQuiz'])->name('quiz.result_quiz');//resultado do quiz ao responder
    Route::get('/quiz-answered', [QuizController::class, 'quizAnswered'])->name('quiz.quiz_answered');//mostra quiz respondido
    Route::get('/quiz/{id}', [QuizController::class, 'quiz'])->name('quiz.quiz'); //Quiz escolhido pelo ID para responder
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');//envia quiz ou atualiza resultado
});
