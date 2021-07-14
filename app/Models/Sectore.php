<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectore extends Model
{
    use HasFactory;

    /* protected $fillable = ['name', 'descripcion', 'categoria']; */
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
