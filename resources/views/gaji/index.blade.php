@extends('dashboard.index')

@section('title', 'Data Gaji')
<?php $no=1?>
@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Gaji </h1>
    </center>

    <div class="card text-center">
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Karyawan</th>
                    <th class="text-center">Jabatan</th>
                    <td class="text-center">Gaji Pokok</td>
                    <td class="text-center">Tunjangan</td>
                    <td class="text-center">Bulan</td>
                    <td class="text-center">Potongan</td>
                    <th class="text-center">total</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Arief</td>
                    <td>Karyawan</td>
                    <td>1.000.00</td>
                    <td>200.00</td>
                    <td>January</td>
                    <td>20.000</td>
                    <td>1.180.000</td>
                </tr>
               {{--<tr>
                    <td>{{  $no++ }}</td>
                    <td> {{ $g -> nama }}</td>
                    <td>{{ $g -> jabatan }}</td>
                    <td>Rp {{ number_format( $g->gajih_pokok,0,',','.' )}} </td>
                    <td>Rp {{ number_format($g -> tunjangan,0,',','.') }} </td>
                    <td>Rp {{  number_format ($potongan ,0,',','.') }}</td>
                    <td>Rp {{ number_format ($g->gajih_pokok + $g->tunjangan  - $potongan ,0,',','.') }} </td>--}}
                </tr>       
              @endforeach
            </table>
        </div>
      </div>    
@endsection