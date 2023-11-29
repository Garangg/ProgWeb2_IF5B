<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'uts', 'uas', 'tugas', 'kehadiran'];

    public function getNilaiAkhir()
    {
        return number_format(($this->uts * 0.3) + ($this->uas * 0.4) + ($this->tugas * 0.3) + (($this->kehadiran / 18) * 100 * 0.1),2);
    }
}
