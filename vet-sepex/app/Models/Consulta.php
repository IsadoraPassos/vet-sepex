<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consulta extends Model
{
    use HasFactory;

    //Define o nome da tabela
    protected $table = 'consulta';
    public $timestamps = false;

    //Relacionamentos
    public function tratamento(): BelongsTo{
        return $this->belongsTo(Tratamento::class);
    }

    public function veterinario(): BelongsTo{
        return $this->belongsTo(Veterinario::class);
    }
}
