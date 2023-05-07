<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';
    protected $fillable = [
        'typeCours',
        'heureDebut',
        'heureFin',
        'date',
        'matiere_id',
        'classe_id'
    ];
    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }
    public function classe()
    {
        return $this->belongsTo('App\Models\Classe');
    }
}
