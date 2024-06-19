<?php

namespace plugins\CoursesManager\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Definición de la tabla asociada
    protected $table = 'COURSE';

    // Definición de los campos que se pueden llenar masivamente
    protected $fillable = [
        'ID_STATUS',
        'NAME_COURSE'
    ];

    // Definición de las claves primarias
    protected $primaryKey = 'ID_COURSE';

    // Deshabilitar la autoincrementación de la clave primaria, si no es autoincremental
    public $incrementing = false;

    // Definir el tipo de la clave primaria
    protected $keyType = 'numeric';
}