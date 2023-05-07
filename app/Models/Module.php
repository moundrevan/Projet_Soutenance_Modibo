<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected  $table = 'modules';
    protected $fillable = [
        'nom',
        'description',
        'code',
        'coefficient'
    ];
    public function matieres()
    {
        return $this->hasMany('App\Models\Matiere');
    }
}
