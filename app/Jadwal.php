<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    public function materi()
    {
        return $this->hasOne(Materi::class, "id" , 'materi_id');
    }
}
