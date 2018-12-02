<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'id', 'jadwal_id');
    }
}
