<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'asc')->get();

        return view('usuarios.index', ['usuarios' => $usuarios, 'pagina' => 'usuarios']);
    }

    public function create()
    {
        return view('usuarios.create', ['pagina' => 'usuarios']);
    }

    public function insert(Request $form)
    {
        $usuario = new Usuario();

        $usuario->nome = $form->nome;
        $usuario->email = $form->email;
        $usuario->usuario = $form->usuario;
        $usuario->senha = Hash::make($form->senha);

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    // Ações de login
    public function login(Request $form)
    {
        // Está enviando o formulário
        if ($form->isMethod('POST'))
        {
            $usuario = $form->usuario;
            $senha = $form->senha;

            $consulta = Usuario::select('id', 'nome', 'email', 'usuario', 'senha')->where('usuario', $usuario)->get();

            // Confere se encontrou algum usuário
            if ($consulta->count())
            {
                // Confere se a senha está correta
                if (Hash::check($senha, $consulta[0]->senha))
                {
                    unset($consulta[0]->senha);

                    session()->put('usuario', $consulta[0]);

                    return redirect()->route('home');
                }
            }

            // Login deu errado (usuário ou senha inválidos)
            return redirect()->route('login')->with('erro', 'Usuário ou senha inválidos.');
        }

        return view('usuarios.login');
    }

    public function logout()
    {
        session()->forget('usuario');
        return redirect()->route('home');
    }
}
