<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

<<<<<<< HEAD
    // protected $fillable = ['nama'];
=======
    protected $fillable = ['nama'];
>>>>>>> 11244e66c68c5b4635ed46037234b4c68bfa2220
    protected $guarded = ['id'];
    protected $with = ['spesialis', 'jadwal'];

    public function spesialis() {
        return $this->belongsTo(Spesialis::class);
    }

    public function jadwal() {
        return $this->belongsTo(Jadwal::class);
    }
}
