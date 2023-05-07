<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rattrapage extends Model
{
    use HasFactory;
    protected $table = "rattrapages";
    protected $fillable = [
        'classe_id',
        'matiere_id',
        'date',
        'heure',
        'effectif'
    ];
    public function classe()
    {
        return $this->belongsTo('App\Models\Classe');
    }
    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }
}
