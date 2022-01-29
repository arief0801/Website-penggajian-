@extends('dashboard/index')

@section('title', 'Data Karyawan')

@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Karyawan </h1>
    </center>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <div class="card" style="width:60% margin=bottom 100px;">
          <div class="card-body">
            <form method="post" action="{{ route('karyawan.update', $karyawan->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" class="form form-control" value="{{$karyawan->nik}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <input type="text" name="nama" class="form form-control" value="{{$karyawan->nama}}">
                </div>
                <br> 
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="varchar" name="jabatan" class="form form-control" value="{{$karyawan->jabatan}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Nomor Rekening</label>
                    <input type="number" name="no_rekening" class="form form-control" value="{{$karyawan->no_rekening}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="number" name="no_telepon" class="form form-control" value="{{$karyawan->no_telepon}}">
                </div>
                  
    
                  
                  <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
                  {{--<a href="/potongan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>--}}
              </form>
          </div>
      </div>
    </div>
  @endsection