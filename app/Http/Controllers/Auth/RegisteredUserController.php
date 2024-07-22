<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.required' => 'Digite o nome',
            'name.string' => 'O nome deve ser apenas textos.',
            'name.max:255' => 'O nome deve conter no máximo 255 caracteres.',
            'email.max:255' => 'O email deve conter no máximo 255 caracteres.',
            'email.unique' => 'Já existe um usuário com esse email. Escolha um outro.',
            'email.email' => 'Digite um email válido.',
            'email.lowercase' => 'Todas as letras do email devem estar em minúsculas.',
            'email.string' => 'O email deve conter apenas textos e o sinal @.',
            'email.required' => 'Digite seu email.',
            'password.required' => 'Digite sua senha.',
            'password.confirmed' => 'Confirma sua senha.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false))->with(['message' => 'Cadastro realizado com sucesso', 'alert-type' => 'success']);
    }
}
