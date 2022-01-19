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
                    {{-- <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Action</th> --}}
                </tr>
                @foreach ($karyawans as $karyawan)
                <tr>
                    <td></td>
                    <td>{{$karyawan->nama}}</td>
                    <td>{{$karyawan->jabatan}}</td>
                    <td>
                      <a href="{{route('karyawan.edit',$karyawan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <form action="{{route('karyawan.destroy',$karyawan->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                  </tr>           
              @endforeach
            </table>
        </div>
      </div>    
@endsection