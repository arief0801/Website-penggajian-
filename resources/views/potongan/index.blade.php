@extends('layouts/app')

@section('title', 'Data Potongan')
<?php $no=1?>
@section('container')
    <center>
        <h1 class="mt-5 mb-5"> Data Potongan </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="potongan/create" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Potongan</th>
                    <th class="text-center">Jumlah Potongan</th>
                    <th class="text-center">Action</th>
                </tr>
                {{--@foreach ($jabatans as $jabatan)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$jabatan->jabatan}}</td>
                    <td> Rp {{ number_format($jabatan->gaji_pokok,0,',','.') }}</td>
                    <td> Rp {{ number_format($jabatan->tunjangan,0,',','.')}}</td>
                    <td>
                      <a href="{{route('jabatan.edit',$jabatan->id)}}" class="btn btn-primary">Edit</a>
          
                      <a  action="{{route('jabatan.destroy',$jabatan->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </a>
                    </td>
                  </tr>--}}           
              @endforeach
            </table>
        </div>
      </div>    
@endsection