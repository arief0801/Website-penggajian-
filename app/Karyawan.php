<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $table="karyawans";
    protected $primaryKey="id";
    protected $fillable =['nik','nama','jabatan_id','no_rekening', 'no_telepon'];


    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
