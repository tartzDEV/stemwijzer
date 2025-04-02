<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vraag extends Model
{
    use HasFactory;

    protected $table = 'vragen';

    protected $fillable = ['thema_id', 'vraag'];

    public function thema()
    {
        return $this->belongsTo(Thema::class);
    }

    public function standpunten()
    {
        return $this->hasMany(Standpunt::class);
    }
}
