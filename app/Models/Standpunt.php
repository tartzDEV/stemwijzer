<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standpunt extends Model
{
    use HasFactory;

    protected $table = 'standpunten';

    protected $fillable = ['partij_id', 'vraag_id', 'positie'];

    public function partij()
    {
        return $this->belongsTo(Partij::class);
    }

    public function vraag()
    {
        return $this->belongsTo(Vraag::class);
    }
}
