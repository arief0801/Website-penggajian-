@extends('layouts/app')

@section('title', 'Data Potongan')
<?php $no=1?>
@section('content')
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
                @foreach ($potongans as $potongan)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$potongan->potongan}}</td>
                    <td> Rp {{ number_format($potongan->jumlah,0,',','.') }}</td>
                    <td>
                      <a href="{{route('potongan.edit',$potongan->id)}}" class="btn btn-primary">Edit</a>
          
                      <form   action="{{route('potongan.destroy',$potongan->id)}}" method="post">
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