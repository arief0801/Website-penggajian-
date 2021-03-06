
@extends('dashboard/index')

@section('title', 'Tambah Data Karyawan')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
      <div class="card-body">
          <form  action="{{route('karyawan.store')}}" method="post">
              @csrf 
              <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="number" name="nik" class="form form-control">
              </div>
              <br>
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" name="nama" class="form form-control">
              </div>
              <br> 
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select name="jabatan_id"  class="form form-control">  
                    <option value="">Pilih Jabatan</option>
                   @foreach ($jabatans as $id => $jabatan)
                    <option value="{{$id }}">{{$jabatan}}</option>
                   @endforeach
                <select>      
              </div>
              <br>
              <div class="form-group">
                <label for="">Nomor Rekening</label>
                <input type="number" name="no_rekening" class="form form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input type="number" name="no_telepon" class="form form-control">
            </div>
              <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
              <a href="/karyawan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>
          </form>
      </div>
  </div>
</div>    
@endsection
 