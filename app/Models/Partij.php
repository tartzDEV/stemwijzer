<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partij extends Model
{
    use HasFactory;

    protected $table = 'partijen';

    protected $fillable = ['naam', 'beschrijving', 'logo'];

    public function standpunten()
    {
        return $this->hasMany(Standpunt::class);
    }
}
