<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Releve extends Model
{
    use HasFactory;
    protected $table = 'releves';
    protected $fillable = [
        'matiere_id',
        'classe_id',
        'promotion_id',
        'specialite_id',
        'devoir',
        'examen',
        'semestre',
        'credit'
    ];
    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }
    public function classe()
    {
        return $this->belongsTo('App\Models\Classe');
    }
    public function promotion()
    {
        return $this->belongsTo('App\Models\Promotion');
    }
    public function specialite()
    {
        return $this->belongsTo('App\Models\Specialite');
    }
}
