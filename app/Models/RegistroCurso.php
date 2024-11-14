<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroCurso extends Model
{
    use HasFactory;

    protected $table = 'registro_curso';

    protected $fillable = [
        'id_usuario',
        'id_curso'
    ];

    // Relación con usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    // Relación con curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
