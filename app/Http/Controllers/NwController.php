<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Nw;

class NwController extends Controller
{
    protected $nw = null;

    public function __construct(Nw $nw){

        $this->nw = $nw; //método criado para utilizarmos os métodos do nosso Model Nw

    }

    public function homeAllPersona(){ //Listar todos os personagens na tela HOME

        $nw = $this->nw->allPersona();

        return view('home',compact('nw'));
      
      }

      public function getPersona($id){ //Obter apenas um persongaem

        $nw = [$this->nw->getPersona($id)];

        return view('home',compact('nw'));
      
      }

    public function allPersona(){ //Listando todos os personagens na tela de cadastro

      $registros = $this->nw->allPersona();

      return view('layout.newway.index',compact('registros'));
    
    }

    public function detelePersona($id){ //Removendo um usuário

        $this->nw->deletePersona($id);

        return redirect()->route('home');

    }

    public function addPersona(){ //Apenas para redirecionar ao formulário de cadastro

      return view('layout.newway.adicionar');
    }

    public function savePersona(Request $req){ //Realizando a inserção do personagem no banco

      $dados = $req->all();

      if($req->hasFile('imagem')){
      $imagem = $req->file('imagem');
      $num = rand(1111,9999);
      $dir = "img/gurreirosnw/";
      $ex = $imagem->guessClientExtension();
      $nomeImagem = "imagem_".$num.".".$ex;
      $imagem->move($dir,$nomeImagem);
      $dados['imagem'] = $dir."/".$nomeImagem;}

      return $this->nw->savePersona($dados);

    }

    public function editPersona($id){ //Redirecionando para a tela de edição, onde podemos atualizar os dados do personagem

      $registro = $this->nw->getPersona($id);

      return view('layout.newway.editar',compact('registro'));

    }

    public function updatePersona(Request $req, $id){ //Atualizando as informações dos personagens

      $dados = $req->all();

      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/gurreirosnw/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;}

      return $this->nw->updatePersona($id, $dados);

    }


}