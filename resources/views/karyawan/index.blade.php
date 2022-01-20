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
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Nomor telepon</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{--{{$no++}}--}}</td>
                    <td>{{$karyawan->nik}}</td>
                    <td>{{$karyawan->nama}}</td>
                    <td>{{$karyawan->jeniskelamin}}</td>
                    <td>{{$karyawan->alamat}}</td>
                    <td>{{$karyawan->nomortelepon}}</td>
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