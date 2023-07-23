<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // CRIA USUÁRIO - Aluno
    public function register(Request $request){
        // Valida dados
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ]);

        // salva usuário
        $request = $request->only(['name', 'email', 'password', 'password_confirmation']);
        $request['password'] = Hash::make($request['password']);
        $user = User::create($request);

        //cria aluno
        $student = Student::create([
            'idUser' => $user->id,
        ]);

        return redirect()->route('login')->with('conta-create-success', 'Conta criada com sucesso');
    }

    // FAZER LOGIN
    public function login(Request $request){
        // Valida dados
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Loga usuário
        if (Auth::attempt($dados, $request->filled('remember'))) {
            $user = User::where('email', $request->email)->get()->first(); //usuario que acabou de logar

            $request->session()->regenerate();
            return redirect()->intended('');
        }


        return back()->withErrors([
            'password' => 'O email e/ou senha são invalidos'
        ]);
    }

    // SAIR DA CONTA
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Verifica se é admin
    public function isAdmin($idUser){
        $admin = Administrator::where('idUser', $idUser)->get()->count();

        // 1 = admin
        // 0 = aluno
        return $admin;
    }
}
