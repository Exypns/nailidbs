<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // protected $fillable = ['nama'];
    protected $guarded = ['id'];
    protected $with = ['spesialis', 'jadwal'];

    public function spesialis() {
        return $this->belongsTo(Spesialis::class);
    }

    public function jadwal() {
        return $this->belongsTo(Jadwal::class);
    }
}
