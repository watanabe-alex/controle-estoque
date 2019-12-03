<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //esse código só precisa se não estiver no padrão
    //public $tableName = "tabela_produtos"; //se tiver outro nome a tabela diferente do plural da classe
    //public $primaryKey = "id_da_tabela"; //se tiver com outro nome o id diferente de "id"
    //public $timestamps = false; //se não estiver trabalhando com timestamps

    //isso faz o inner join do mysql
    public function user() {
        return $this->belongsTo('App\User');
    }

    

}
