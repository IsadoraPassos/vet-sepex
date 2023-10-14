<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Veterinario extends Model
{
    use HasFactory;

    //Define o nome da tabela
    protected $table = 'veterinario';
    public $timestamps = false;

    //Relacionamentos
    public function consultas(): HasMany{
        return $this->hasMany(Consulta::class);
    }
}
