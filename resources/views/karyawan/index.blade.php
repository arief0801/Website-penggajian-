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
                    <th class="text-center">NIK</th>
                    <th class="text-center">Nama Pegawai</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Nomor Rekening</th>
                    <th class="text-center">Nomor Telepon</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{--{{$no++}}--}}</td>
                    <td>{{$karyawan->nik}}</td>
                    <td>{{$karyawan->nama}}</td>
                    <td>{{$karyawan->jenis_kelamin}}</td>
                    <td>{{$karyawan->jabatan}}</td>
                    <td>{{$karyawan->no_rekening}}</td>
                    <td>{{$karyawan->no_telepon}}</td>
                    <td>
                      <a href="{{route('karyawan.edit',$karyawan->id)}}" class="btn btn-primary">Edit</a>
          
                      <a  action="{{route('karyawan.destroy',$karyawan->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </a>
                    </td>
                  </tr>           
              @endforeach
            </table>
        </div>
      </div>    
@endsection