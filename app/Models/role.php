<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'ROLE';

    protected $primaryKey = 'ID_ROLE';

    public $incrementing = false;

    protected $keyType = 'decimal';

    public $timestamps = false;

    protected $fillable = ['ID_ROLE', 'DESCRIPTION_ROLE'];
}