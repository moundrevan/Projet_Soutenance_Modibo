<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'user_id',
        'matiere_id',
        'devoir',
        'examen'
    ];
    public function user()
    {
        return  $this->belongsTo('App\Models\User');
    }
    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }
}
