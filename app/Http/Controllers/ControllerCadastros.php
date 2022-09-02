<?php

namespace App\Http\Controllers;
use App\Models\Cadastros;
use Illuminate\Http\Request;

class ControllerCadastros extends Controller
{
    public function Home(){
        $Cadastros = Cadastros::All();
        return view('Home',['Cadastros'=>$Cadastros]);
    }
    public function CreateCadastro(){
        return view('Cadastro');
    }
    public function Create(Request $request){
        $clientes =  new Cadastros;
        $clientes->nome = $request->nome;
        $clientes->filiacao = $request->filiacao;
        $clientes->cpf = $request->cpf;
        $clientes->nascimento = $request->nascimento;
        $clientes->endereco = $request->endereco;
        $clientes->bairro = $request->bairro;
        $clientes->cep = $request->cep;
        $clientes->municipio = $request->municipio;
        $clientes->email = $request->email;
        $clientes->tel = $request->tel;
        $clientes->save();
        return redirect('/');
    }
    public function Delete($id){
        $Cadastros = Cadastros::find($id);
        $Cadastros->delete();
        return redirect('/');
    }
    public function UpdatePage($id){
        $Cadastros = Cadastros::findOrFail($id);
        return view('Editar',['Cadastros'=> $Cadastros]);
    }
    public function Update(Request $request){
        $Cadastros = Cadastros::find($request->id);
        $Cadastros->nome = $request->nome;
        $Cadastros->filiacao = $request->filiacao;
        $Cadastros->cpf = $request->cpf;
        $Cadastros->nascimento = $request->nascimento;
        $Cadastros->endereco = $request->endereco;
        $Cadastros->bairro = $request->bairro;
        $Cadastros->cep = $request->cep;
        $Cadastros->municipio = $request->municipio;
        $Cadastros->email = $request->email;
        $Cadastros->tel = $request->tel;
        $Cadastros->save();
        return redirect('/');
    }
}
