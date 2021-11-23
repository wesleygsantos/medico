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
        

        return view('welcome',['medicos' => $medicos,'search' => $search]);

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

    public function dashboard(){

        $search = request('search-crm');

        if($search){
            $medicos = Medico::where([
                ['CRM', 'like', '%' . $search . '%']
            ])->get();
        }else{
            $medicos = Medico::all();
        }

        $usuario = auth()->user();
        $permissao = $usuario->permissao;

        return view('novomedico.dashboard',['medicos' => $medicos, 
                                'search' => $search, 
                                'permissao' =>$permissao]);

    }

    public function destroy($id){

        Medico::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg','Cadastro excluído com sucesso!');

    }

    public function edit($id){

        $med = Medico::findOrFail($id);

        return view('novomedico.edit',['med' => $med]);

    }

    public function update(Request $request){

        Medico::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg','Cadastro editado com sucesso!');

    }

    public function registro(){

        return view('novousuario.registro');

    }

    public function storeUsuario(Request $request){

        $usuario = new User;

        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = \Hash::make($request->senha);
        $usuario->permissao = $request->permissao;

        $usuario->save();

        return redirect('/novousuario/registro')->with('msg','Novo Usuário cadastrado com sucesso!');

    }

    


}
