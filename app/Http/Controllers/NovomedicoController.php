<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;
use App\Models\User;

class NovomedicoController extends Controller
{
    public function index(){

        $search = request('search-nome');

        if($search){
            $medicos = Medico::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        }else{
            $medicos = Medico::all();
        }

        if(auth()->user()){
            $usuario = auth()->user();
            $permissao = $usuario->permissao;
        }else{
            $permissao = 0;
        }
        

        return view('welcome',['medicos' => $medicos, 
                                'search' => $search, 
                                'permissao' =>$permissao]);

    }

    public function create(){

        return view('novomedico.create');

    }

    public function store(Request $request){

        $medico = new Medico;

        $medico->nome = $request->nomeMedico;
        $medico->CRM = $request->crmMedico;
        $medico->especialidade = $request->especialidadeMedico;
        $medico->telefone = $request->telefoneMedico;

        $medico->save();

        return redirect('/')->with('msg','Novo Médico cadastrado com sucesso!');

    }



}
