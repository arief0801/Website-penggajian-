@extends('layouts/app')

@section('title', 'Data Karyawan')

@section('container')
    <center>
        <h1 class="mt-5 mb-5"> Data Karyawan </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="karyawan/create" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">nik</th>
                    <th class="text-center">Nama Pegawai</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Action</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">3204320801010004</td>
                    <td class="text-center">Arief Rahman</td>
                    <td class="text-center">Laki Laki</td>
                    <td class="text-center">Karyawan Lepas</td>
                    <td>
                        <a href="tambahkaryawan" class=" btn btn-primary">edit</a>
                        <a href="" onclick="return confirm('hapus')" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            </table>
        </div>
      </div>    
@endsection