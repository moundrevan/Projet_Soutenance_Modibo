<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $table = 'matieres';
    protected $fillable = [
        'nom',
        'description',
        'module_id',
        'coefficient'
    ];
    public function module()
    {
        return $this->belongsTo('App\Models\Module');
    }
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
