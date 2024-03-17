<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    protected $table = 'attivita';
    // protected $primaryKey = 'attivita_id';
    protected $fillable = ['nome', 'descrizione', 'project_id'];
    
    use HasFactory;
    
    public function progetto()
    {
        return $this->belongsTo(Progetto::class, 'project_id');
    }
}
