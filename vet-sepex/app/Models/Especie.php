<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especie extends Model
{
    use HasFactory;

    //Define o nome da tabela
    protected $table = 'especie';
    public $timestamps = false;

    //Relacionamentos
    public function animais(): HasMany{
        return $this->hasMany(Animal::class);
    }
}
