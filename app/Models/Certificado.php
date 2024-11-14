<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $table = 'certificados';

    protected $fillable = [
        'id_usuario',
        'id_curso',
        'fecha_emision',
        'codigo_certificado',
        'url_certificado'
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
