<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table="jabatans";
    protected $primaryKey="id";
    protected $fillable =['jabatan','gaji_pokok','tunjangan'];

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class);
    }
}
