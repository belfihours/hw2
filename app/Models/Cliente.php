<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="cliente";
    protected $hidden=["password"];
    public $timestamps = false;

    public function recensione(){
        return $this->hasOne("App\Models\Recensione", "id_cliente", "ID");
    }


}

?>