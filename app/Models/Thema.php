<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thema extends Model
{
    use HasFactory;

    protected $table = 'themas';

    protected $fillable = ['naam', 'beschrijving'];

    public function vragen()
    {
        return $this->hasMany(Vraag::class);
    }
}
