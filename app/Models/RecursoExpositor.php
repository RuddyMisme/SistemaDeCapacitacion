<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoExpositor extends Model
{
    use HasFactory;

    protected $table = 'recursos_expositor';

    protected $fillable = [
        'id_usuario',
        'id_curso',
        'tipo_recurso',
        'url_recurso',
        'id_reunion_zoom',
        'enlace_zoom',
        'materiales',
        'notas'
    ];

    // Relación con usuario (expositor)
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
