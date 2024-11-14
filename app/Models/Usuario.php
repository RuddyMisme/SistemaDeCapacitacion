<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario',
        'contrasena',
        'nombre',
        'apellido_p',
        'apellido_m',
        'carnet',
        'fecha_nac',
        'correo',
        'telefono',
        'nombre_rol',
        'nombre_area'
    ];

    protected $hidden = [
        'contrasena',
    ];

    // Relación con cursos como expositor
    public function cursosExpositor()
    {
        return $this->hasMany(RegistroCurso::class, 'id_usuario');
    }

    // Relación con inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_usuario');
    }

    // Relación con asistencias
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'id_usuario');
    }

    // Relación con pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_usuario');
    }

    // Relación con certificados
    public function certificados()
    {
        return $this->hasMany(Certificado::class, 'id_usuario');
    }

    // Relación con recursos del expositor
    public function recursosExpositor()
    {
        return $this->hasMany(RecursoExpositor::class, 'id_usuario');
    }
}


