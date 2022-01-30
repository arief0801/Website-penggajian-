@extends('dashboard.index')

@section('title', 'Data Gaji')
<?php $no=1?>
@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Gaji </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="gaji/create" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Karyawan</th>
                    <th class="text-center">Jabatan </th>
                    <td class="text-center">Gaji Pokok</td>
                    <td class="text-center">Tunjangan</td>
                    <td class="text-center">Potongan</td>
                    <th class="text-center">total</th>
                </tr>
                {{--@foreach ($ as $)
                {{--<tr>
                    <td>{{$no++}}</td>
                    <td>{{$->potongan}}</td>
                    <td> Rp {{ number_format($potongan->jumlah,0,',','.') }}</td>
                    <td>
                      <a href="{{route('potongan.edit',$potongan->id)}}" class="btn btn-primary">Edit</a>
          
                      <a  action="{{route('potongan.destroy',$potongan->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </a>
                    </td>
                  </tr> --}}          
              {{--@endforeach--}}
            </table>
        </div>
      </div>    
@endsection