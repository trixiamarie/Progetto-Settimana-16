<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progetto extends Model
{
    protected $table = 'progetti';
    protected $fillable = ['nome_progetto', 'descrizione', 'user_id'];

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function progettiPerUtente($userId)
    {
        return self::where('user_id', $userId)->get();
    }

    public function attivita()
    {
        return $this->hasMany(Attivita::class, 'project_id');
    }
}

