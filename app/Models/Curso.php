<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $fillable = [
        'id_area',
        'nombre',
        'descripcion',
        'duracion',
        'fecha_inicio',
        'fecha_fin'
    ];

    // Relación con el área
    public function area()
    {
        return $this->belongsTo(Area::class, 'id_area');
    }

    // Relación con expositores registrados
    public function registrosCurso()
    {
        return $this->hasMany(RegistroCurso::class, 'id_curso');
    }

    // Relación con inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_curso');
    }

    // Relación con pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_curso');
    }

    // Relación con certificados
    public function certificados()
    {
        return $this->hasMany(Certificado::class, 'id_curso');
    }

    // Relación con recursos del expositor
    public function recursosExpositor()
    {
        return $this->hasMany(RecursoExpositor::class, 'id_curso');
    }
}
