<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Animal extends Model
{
    use HasFactory;

    //Define o nome da tabela
    protected $table = 'animal';
    public $timestamps = false;

    //Relacionamentos
    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class);
    }

    public function especie(): BelongsTo{
        return $this->belongsTo(Especie::class);
    }

    public function tratamentos(): HasMany{
        return $this->hasMany(Tratamento::class);
    }
}
