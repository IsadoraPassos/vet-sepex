<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tratamento extends Model
{
    use HasFactory;

    //Define o nome da tabela
    protected $table = 'tratamento';
    public $timestamps = false;

    //Relacionamentos

    public function animal(): BelongsTo{
        return $this->belongsTo(Animal::class);
    }

    public function consultas(): HasMany{
        return $this->hasMany(Consulta::class);
    }
}
