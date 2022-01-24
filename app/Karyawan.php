<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable =['nama','jenis_kelamin','jabatan','no_rekening', 'no_telepon'];
}
