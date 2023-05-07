<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected  $table = 'classes';
    protected $fillable = [
        'nom',
        'description'
    ];
    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }
    public function rattrapages()
    {
        return $this->hasMany('App\Models\Rattrapage');
    }
    public function releves()
    {
        return $this->hasMany('App\Models\Releves');
    }
}
