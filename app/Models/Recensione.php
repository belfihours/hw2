<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Recensione extends Model
{
    protected $table="recensione";
    protected $primaryKey="id_cliente";
    protected $autoIncrement=false;
    public $timestamps = false;

    public function cliente(){
        return $this->belongsTo("App\Models\Cliente", "id_cliente", "ID");
    }

}

?>