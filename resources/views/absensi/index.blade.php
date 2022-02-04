@extends('dashboard.index')

@section('title', 'Data Absensi')
<?php $no=1?>
@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Absensi </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="absensi/create" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Karyawan</th>
                    <th class="text-center">Jabatan </th>
                    <th class="text-center">Bulan </th>
                    <td class="text-center" width="8%">Hadir</td>
                    <td class="text-center" width="8%">Sakit</td>
                    <td class="text-center" width="8%">Alfa</td>
                    <th class="text-center">Action</th>
                </tr>
                <tr>

                    @foreach ($absensis as $absensi)
                    <td>{{$no++}}</td>
                    <td></td>
                    <td></td>
                    <td>{{$absensi->bulan}}</td>
                    <td>{{$absensi->hadir}}</td>
                    <td>{{$absensi->sakit}}</td>
                    <td>{{$absensi->alpa}}</td>
                    <td>
                        <a href="{{ route('absensi.edit',$absensi->id) }}" class="btn btn-primary">Edit</a>
            
                        <a  action="{{ route('absensi.destroy',$absensi->id) }}" method="post">
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