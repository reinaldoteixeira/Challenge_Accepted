<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Nw extends Model
{
    protected $fillable = [ //Tem a função de proteger os dados quando realizar uma inserção
        'imagem','nome','tipo','especialidade','vida','defesa','dano','velocidade_ataque','velocidade_movi'
    ];

    public function allPersona(){

      return self::all(); //Obtendo todos os dados do objeto, pegando dados do banco

    }

    public function savePersona($dados){ //Inserindo personagem

        $nw = new Nw();
        $nw->fill($dados);
        $nw->save();

        return redirect()->route('home');
    }

    public function updatePersona($id, $dados){ //Atualizando personagem

        $nw = new Nw();
        $nw = self::find($id)->update($dados);
   
        return redirect()->route('home');
    }

    public function deletePersona($id){ //Removendo personagem
        
        $nw = self::find($id);
        $nw->delete();

    }

    public function getPersona($id){ //Obtendo personagem
        
        return self::find($id);
         
    }

}
