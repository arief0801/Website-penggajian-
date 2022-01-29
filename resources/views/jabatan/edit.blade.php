
@extends('dashboard.index')

@section('title', 'Edit Data Jabatan')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
      <div class="card-body">
        <form method="post" action="{{ route('jabatan.update', $jabatan->id) }}">
            @csrf
            @method('PATCH')
              <div class="form-group">
                  <label for="nik">Nama Jabatan</label>
                  <input type="text" name="jabatan" class="form form-control" value="{{$jabatan->jabatan}}">
              </div>
              <br>
              <div class="form-group">
                  <label for="nama">Gaji Pokok </label>
                  <input type="number" name="gaji_pokok" class="form form-control" value="{{$jabatan->gaji_pokok}}">
              </div>
              <br> 
              <div class="form-group">
                <label for="nama">Tunjangan </label>
                <input type="number" name="tunjangan" class="form form-control" value="{{$jabatan->tunjangan}}">
            </div>


              
              <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
              {{--<a href="/potongan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>--}}
          </form>
      </div>
  </div>
</div>    
@endsection
 